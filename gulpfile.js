var gulp = require('gulp');
var foreach = require('gulp-foreach');
var wait = require('gulp-wait');
var path = require('path');
var cache = require('gulp-cache');
var runSequence  = require('run-sequence');
const template = require('gulp-template');
var merge = require('gulp-merge-json');
var data = require('./data.json');
htmlv = require('gulp-html-validator');
var Vinyl = require('vinyl');
var shell = require('gulp-shell');
var sassJson = require('gulp-sass-json');
var fs = require('fs');
var GulpSSH = require('gulp-ssh');
var htmlsplit = require('gulp-htmlsplit');
var watch = require('gulp-watch');
var pug = require('gulp-pug');
//var batch = require('gulp-batch');
var gm = require('gulp-gm');
var insert = require('gulp-insert');
var imageResize = require('gulp-image-resize');
const imagemin = require('gulp-imagemin');
var minimist = require('minimist');
var sass = require('gulp-sass');
var htmlhint = require("gulp-htmlhint");
var clean = require('gulp-clean');
const autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var file = require('gulp-file');
var uncss = require('gulp-uncss');
var rename = require("gulp-rename");
var unquote = require('unquote');
const del = require('del');
var Sync = require('sync');
var gulpsync = require('gulp-sync')(gulp);
var svgstore = require('gulp-svgstore');
var svgmin = require('gulp-svgmin');
var pugPHPFilter = require('pug-php-filter');
var phplint = require('gulp-phplint');
const html2pug = require('gulp-html2pug');
var sftp = require('gulp-sftp');
var colors = require('colors');
var iconfont = require('gulp-iconfont');
var runTimestamp = Math.round(Date.now()/1000);
var iconfontCss = require('gulp-iconfont-css');

// QUANT PLUGINS&FUNCTIONS


var qp_path = "./gulp plugins/";
const scriptCleaner = require(qp_path+'scriptbuilder/scleaner');
const scriptThrower = require(qp_path+'scriptbuilder/sthrower');
var qM = require(qp_path+'q_functions');





//**********************************************************************************************************************


gulp.task('phplint', function phplint() {
    gulp.src('dist/category.php')
        .pipe(phplint());
})



gulp.task('SCRIPTS2', function () {
    gulp.src('data.json')
        .pipe(scriptThrower());
})

gulp.task('SCRIPTS ALL', gulpsync.sync(['SCRIPTS2'])
);


gulp.task('views', function buildHTML() {
    var data = JSON.parse(fs.readFileSync('data.json', 'utf8'));
    gulp.src('dev/templates/PAGESYSTEM/PAGES/*.pug')
        .pipe(pug({
            data: data,
            pretty: true,
            filters: {
                php: pugPHPFilter
            }
        })).pipe(gulp.dest('dist'));
    var str ="include ../templates/PAGESYSTEM/INCLUDES/_includes\n";
    gulp.src('dev/templates/projectboard.pug').pipe(insert.prepend(str)).pipe(rename(function (path) {
        path.basename='index';
        }))
        .pipe(pug({
            data: data,
            pretty: true,
        })).pipe(gulp.dest('projectboard/'));
});



gulp.task('validate',function () {
    gulp.src("dist/*service.html")
        .pipe(htmlhint())
        .pipe(htmlhint.failReporter());
});
gulp.task('default', function() {
    gulp.watch('dev/**/*.pug', ['views','browserreload']);
    gulp.src('dist/main.css')
        .pipe(autoprefixer({
            browsers: ['last 20 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist'));
});

gulp.task('bro', function() {
    browserSync.init({
        server: {
            baseDir: "dist/"
        }
    });
});
gulp.task('wpServ', function() {
    browserSync.init({
        port:80,
        proxy: {

            target: "http://localhost/wordpress",
            ws: true
        }
    });

    gulp.watch(["backend/Hospital/wordpress/wp-content/themes/hospital/*.css"]).on('change', browserSync.reload);
});





gulp.task('PAGESYSTEM', function() {
    for(var index in data.pages) {
        var attr = data.pages[index];
        if(attr.layout == 'default')
            var str = "//- "+attr.slug+".pug\nextends ../LAYOUT/layout.pug\nblock title\n\t-var page={slug:'"+attr.slug+"',title:'"+attr.title+"'};\n\ttitle "+attr.title;
        else
            var str = "//- "+attr.slug+".pug\nextends ../LAYOUT/"+attr.layout+"/layout.pug\nblock title\n\t-var page={slug:'"+attr.slug+"',title:'"+attr.title+"'};\n\ttitle "+attr.title;
        if (!fs.existsSync('dev/templates/PAGESYSTEM/PAGES/'+attr.slug+'.pug') && !fs.existsSync('dev/scss/PAGES/_'+attr.slug+'.scss')) {
            file(attr.slug+'.pug', str)
                .pipe(gulp.dest('dev/templates/PAGESYSTEM/PAGES'));

                var pageName = attr.slug.toUpperCase();
            gulp.src('vendor/file_templates/PAGES/Styles/_page.scss.tpl')
                .pipe(rename('off_'+attr.slug+'-page.scss'))
                .pipe(template({name:pageName}))
                .pipe(gulp.dest('dev/scss/PAGES/'))

        }

    }

});


/////////////////////////////////////
gulp.task('SERVER', [], function() {

    browserSync.init({
        server: "./dist",
    });

    gulp.watch(["dist/index.html","dist/*.css"]).on('change', browserSync.reload);



});






gulp.task('VIEW-FINAL', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/ELEMENTS/_elements.pug',
        'dev/MIXES/_mixes.pug',
        'dev/MODULES/_modules.pug',
        'data.json',
        'dev/templates/**/*.pug',
        'blueprint/*.pug',
        '!dev/templates/PAGESYSTEM/SCRIPTS-STYLES/**/*'
    ], function () {
        gulp.start('views');
        gulp.start('compile-blueprint-view');
    });
});

gulp.task('VIEW-1-ELEMENTS', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/ELEMENTS/**/*.pug',
        '!dev/ELEMENTS/_elements.pug'
    ], function () {
        gulp.start('concat-elements-pug');
    });
});
gulp.task('VIEW-1-MIXES', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/MIXES/**/*.pug',
        '!dev/MIXES/_mixes.pug'
    ], function () {
        gulp.start('concat-mixes-pug');
    });
});
gulp.task('VIEW-1-MODULES', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/MODULES/**/_mixin.pug',
        '!dev/MODULES/_modules.pug'
    ], function () {
        gulp.start('concat-modules-pug');

    });
});

gulp.task('VIEW-1-DATA', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/**/*.json',
        '!dev/scss/MASTER_OPTIONS/*.json',
        '!dev/SOURCE_FABRIC/**/*.json'
    ], function () {
        runSequence('mergeJson');

    });
});

// SERVER WATCHER
gulp.task('SERVER WATCHER', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch(["dist/index.html","dist/*.css","dev/SCRIPTS/scriptMap.js"], function () {
        browserSync.reload();

    });
});
gulp.task('WATCH-MODULE-FOLDERS', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/MODULES/**/*/',
        '!dev/MODULES/_modules.pug',
        '!dev/MODULES/_modules.scss',
        '!dev/MODULES/**/_include.pug',
        '!dev/MODULES/**/_mixin.scss',
        '!dev/MODULES/**/data.json',
        '!dev/MODULES/**/_starter.scss',
        '!dev/MODULES/**/info.mmd',
        '!dev/MODULES/**/_mixin.pug',
        '!dev/MODULES/**/libs.json',



    ], function () {
        runSequence('concat-modules-pug','concat-modules-scss');

    });
});


// STYLES

gulp.task('STYLES-FINAL', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([
        'dev/scss/**/*.scss',
        '!dev/scss/PAGES/*-page.scss',
        'dev/ELEMENTS/_elements.scss',
        'dev/MIXES/_mixes.scss',
        'dev/MODULES/_modules.scss',
        'blueprint/*.scss',
    ], function () {
        gulp.start('styles');
        gulp.start('compile-blueprint-sass');
        gulp.start('throw-main-css');

    });
});
gulp.task('STYLES-1-ELEMENTS', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([
        'dev/ELEMENTS/**/--*/*.scss',
        '!dev/ELEMENTS/_elements.scss'
        ], function () {
        gulp.start('concat-elements-scss');
    });
});


gulp.task('STYLES-1-PAGES', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([
        'dev/scss/PAGES/*.scss',
        '!dev/scss/PAGES/off_*.scss',
        '!dev/scss/PAGES/_pages.scss'
    ], function () {
        gulp.start('concat-pages-scss');
    });
});


gulp.task('STYLES-1-MIXES', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/MIXES/**/*.scss',
        '!dev/MIXES/_mixes.scss'
    ], function () {
        gulp.start('concat-mixes-scss');
    });
});
gulp.task('STYLES-1-MODULES', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch([

        'dev/MODULES/**/--*/*.scss',
        '!dev/MODULES/_modules.scss']
        , function () {
        gulp.start('concat-modules-scss');
    });
});
//SCRIPTS
gulp.task('SCRIPTS-FINAL', function () {
    // Callback mode, useful if any plugin in the pipeline depends on the `end`/`flush` event
    return watch(['dev/**/*.js']
        , function () {
            gulp.start('SCRIPTS ALL');
        });
});
gulp.task('WATCHER:NEW' ,function(){
    runSequence([

        'VIEW-FINAL','VIEW-1-MIXES','VIEW-1-MODULES','VIEW-1-ELEMENTS','VIEW-1-DATA',
        'STYLES-FINAL','STYLES-1-MIXES','STYLES-1-ELEMENTS','STYLES-1-MODULES','STYLES-1-PAGES',
        'SCRIPTS-FINAL',
        'SERVER WATCHER',
        'readyWatcher'
    ])
})

gulp.task('BUILDUP'

,function(callback){

runSequence(
        'mergeJson',
        'concat-elements-pug',
        'concat-mixes-pug',
        'concat-modules-pug',

        'views',
        'concat-mixes-scss',
        'concat-elements-scss',
        'concat-modules-scss',
        'styles',
        'SCRIPTS ALL')
callback();
}

)



gulp.task('readyWatcher',function(){
    qM.ok('WATCHER READY');
})




gulp.task('optimage', [], function() {
    gulp.src('dist/not_opt_images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
});
gulp.task('image_resize', [], function() {
    gulp.src('dist/images/*')
        .pipe(imageResize({
            width : 1200,
            height : 567,
            crop : true,
            upscale : true
        }))
        .pipe(gulp.dest('dist/images-rs'));
});


///////////////// CONCATS

gulp.task('concat-modules-and-mixes', function() {
    gulp.src(['dev/MODULES/MENUS/--*/*.scss','dev/MODULES/PROJECT MODULES/--*/*.scss'])
        .pipe(concat('_modules.scss'))
        .pipe(gulp.dest('dev/MODULES/'));
    gulp.src(['dev/MIXES/**/_style.scss'])
        .pipe(concat('_mixes.scss'))
        .pipe(gulp.dest('dev/MIXES/'));
    gulp.src(['dev/MIXES/**/_mixin.pug'])
        .pipe(concat('_mixes.pug'))
        .pipe(gulp.dest('dev/MIXES/'));

});




gulp.task('concat-elements', function() {

    gulp.src('dev/ELEMENTS/*/--*/*.scss')
        .pipe(concat('_elements.scss'))
        .pipe(gulp.dest('dev/ELEMENTS/'));
    gulp.src('dev/ELEMENTS/*/--*/*.pug')
        .pipe(concat('_elements.pug'))
        .pipe(gulp.dest('dev/ELEMENTS/'));
});

gulp.task('concat-elements-pug', function() {


    gulp.src('dev/ELEMENTS/*/--*/*.pug')
        .pipe(concat('_elements.pug'))
        .pipe(gulp.dest('dev/ELEMENTS/'));
});

gulp.task('concat-elements-scss', function() {


    gulp.src('dev/ELEMENTS/*/--*/*.scss')
        .pipe(concat('_elements.scss'))
        .pipe(gulp.dest('dev/ELEMENTS/'));
});

gulp.task('concat-pages-scss', function() {


    gulp.src(['dev/scss/PAGES/*.scss','!dev/scss/PAGES/off_*.scss','!dev/scss/PAGES/_pages.scss'])
        .pipe(concat('_pages.scss'))
        .pipe(gulp.dest('dev/scss/PAGES/'));
});

gulp.task('concat-mixes-pug', function() {

    gulp.src(['dev/MIXES/**/_mixin.pug'])
        .pipe(concat('_mixes.pug'))
        .pipe(gulp.dest('dev/MIXES/'));
});

gulp.task('concat-mixes-scss', function() {


    gulp.src('dev/MIXES/**/_style.scss')
        .pipe(concat('_mixes.scss'))
        .pipe(gulp.dest('dev/MIXES/'));
});


gulp.task('concat-modules-scss', function() {


    gulp.src('dev/MODULES/*/--*/*.scss')
        .pipe(concat('_modules.scss'))
        .pipe(gulp.dest('dev/MODULES/'));

});

gulp.task('concat-modules-pug', function(done) {


    gulp.src('dev/MODULES/*/--*/_mixin.pug')
        .pipe(concat('_modules.pug'))
        .pipe(gulp.dest('dev/MODULES/'));
        done();

});








var buildmodulesData = {
    string: 'name',
    default: 'no',
};
var options = minimist(process.argv.slice(2), buildmodulesData);

//////////////////////////////////////////////////////////
var type = {
    string: 'type',
    default: 'link',
};

var extend = {
    string: 'extend',
    default: 'NO',
};
var elemType = minimist(process.argv.slice(2), type);
var elementName = minimist(process.argv.slice(2), buildmodulesData);
var elemExtend = minimist(process.argv.slice(2), extend);

gulp.task('be', function() {


    var dir = elemType.type.toUpperCase()+'S';
    var elemName = elementName.name;
    var elemData = {
            elementName: elemName,
            dir : dir
        }

        if (!fs.existsSync('dev/ELEMENTS/'+dir+'/--'+elemName )) {


            var elemTemplates = fs.readdirSync('vendor/file_templates/ELEMENTS/'+dir+'/_templates/');

            if (elemExtend.extend){

                elemData.extend = elemExtend.extend;
                elemName +='( '+elemExtend.extend+' )';


            }

            for (var key in elemTemplates) {

                var file =  elemTemplates[key].slice(1,-4);

                if (elemExtend.extend && file =='extend.scss'){

                    file = 'style.scss'
                }

                else if (elemExtend.extend && file =='style.scss'){
                    continue;
                }else if (!elemExtend.extend && file =='extend.scss'){
                    continue;
                }
                if (file == 'elementScript.js') file = elemName+'.js';

                    gulp.src('vendor/file_templates/ELEMENTS/'+dir+'/_templates/'+elemTemplates[key])
                        .pipe(rename(file))
                        .pipe(template(elemData))
                        .pipe(gulp.dest('dev/ELEMENTS/'+dir+'/--'+elemName+'/'))



            }

            qM.ok('Element added!');
        }else qM.err('THIS ELEMENT ALREADY EXIST!');

    });

gulp.task('bm', function() {

    if (!fs.existsSync('dev/MODULES/PROJECT MODULES/--'+options.name)) {


        var moduleName = options.name,
         elemData = {
            moduleName: moduleName
        },

            moduleTemplates = fs.readdirSync('vendor/file_templates/MODULES/_templates/');
        try{
            for (var key in moduleTemplates) {

                var file =  moduleTemplates[key].slice(1,-4);
                if( file == 'moduleScript.js' ) file = moduleName+'.js';

                gulp.src('vendor/file_templates/MODULES/_templates/'+moduleTemplates[key])
                    .pipe(rename(file))
                    .pipe(template(elemData))
                    .pipe(gulp.dest('dev/MODULES/PROJECT MODULES/--'+moduleName+'/'))
            }
        }catch(e){

            qM.err(e.name+' '+e.message);

        }qM.ok('Module added!');




    }else qM.err('THIS MODULE ALREADY EXIST!');

});

gulp.task('bs', function() {

    if (!fs.existsSync('dev/SCRIPTS/SCRIPTS/--'+options.name)) {


        var scrName = options.name,
            elemData = {
                name: scrName
            },

            templates = fs.readdirSync('vendor/file_templates/SCRIPTS/_templates/');
        try{
            for (var key in templates) {

                var file =  templates[key].slice(1,-4);

                if( file == 'template.js' ) file = scrName+'.js';

                gulp.src('vendor/file_templates/SCRIPTS/_templates/'+templates[key])
                    .pipe(rename(file))
                    .pipe(template(elemData))
                    .pipe(gulp.dest('dev/SCRIPTS/SCRIPTS/--'+scrName+'/'))
            }
        }catch(e){

            qM.err(e.name+' '+e.message);

        }qM.ok('Script added!');




    }else qM.err('THIS SCRIPT ALREADY EXIST!');

});

gulp.task('bmx', function() {

    if (!fs.existsSync('dev/MIXES/'+options.name)) {


        var scrName = options.name,
            elemData = {
                name: scrName
            },

            templates = fs.readdirSync('dev/MIXES/_templates/');
        try{
            for (var key in templates) {

                var file =  templates[key].slice(1,-4);



                gulp.src('dev/MIXES/_templates/'+templates[key])
                    .pipe(rename(file))
                    .pipe(template(elemData))
                    .pipe(gulp.dest('dev/MIXES/'+scrName+'/'))
            }
        }catch(e){

            qM.err(e.name+' '+e.message);

        }qM.ok('MIX added!');




    }else qM.err('THIS MIX ALREADY EXIST!');

});




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


var alredyCompile = false;
gulp.task('styles', function () {
    if (!alredyCompile){
        alredyCompile = true;
        gulp.src('dev/scss/main.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('dist'))
        .pipe(gulp.dest('blueprint'))
        .pipe(gulp.dest('projectboard'));

        gulp.src('dev/scss/MASTER_OPTIONS/*.scss')
        .pipe(sassJson())
        .pipe(gulp.dest('dev/scss/MASTER_OPTIONS/'));
        alredyCompile = false;

    }

});
gulp.task('throw-main-css', function () {
    gulp.src('dist/main.css')
        .pipe(gulp.dest('blueprint'));
});
gulp.task('browser-reload',  function() {
    browserSync.reload

});
var htmlhint = require("gulp-htmlhint");
gulp.task('validw3c', function () {
    gulp.src('dist/index.php.html')
        .pipe(htmlv({format: 'html'}))
        .pipe(gulp.dest('dist/1/'));
});
//////////////////// WORDPRESS
gulp.task('makeWP_DRAFT', function() {
         gulp.src(['integrator/WordPress/style.css','dist/main.css'])
        .pipe(concat('style.css'))
        .pipe(gulp.dest('integrator/WordPress/DRAFT/'));
         gulp.src(['integrator/WordPress/header.php','dist/splits/header.html'])
        .pipe(concat('header.php'))
        .pipe(gulp.dest('integrator/WordPress/DRAFT'));
         gulp.src(['integrator/WordPress/footer.php','dist/splits/footer.html'])
        .pipe(concat('footer.php'))
        .pipe(gulp.dest('integrator/WordPress/DRAFT'));
         gulp.src(['integrator/WordPress/index.php','dist/splits/index.html'])
        .pipe(concat('index.php'))
        .pipe(gulp.dest('integrator/WordPress/DRAFT'));
         gulp.src(['dist/images/*','dist/images_rs/*'])
        .pipe(gulp.dest('integrator/WordPress/DRAFT/images/'));
////////////////////////
    for(var index in data.pages) {
        var attr = data.pages[index];
        if (attr.slug !=='index' && !attr.shop==true)
             gulp.src(['integrator/WordPress/page.php','dist/splits/'+attr.slug+'.html'])
            .pipe(concat('page-'+attr.slug+'.php'))
            .pipe(gulp.dest('integrator/WordPress/DRAFT'));
        else if(attr.shop==true){
            gulp.src(['integrator/WordPress/wc shop/LOOP/archive-product.php','dist/splits/production.html'])
            .pipe(concat('archive-product.php'))
            .pipe(gulp.dest('integrator/WordPress/DRAFT/woocommerce/'));

            gulp.src(['integrator/WordPress/wc shop/LOOP/single-product.php','dist/splits/product.html'])
            .pipe(concat('single-product.php'))
            .pipe(gulp.dest('integrator/WordPress/DRAFT/woocommerce/'));

            gulp.src(['integrator/WordPress/wc shop/CONTENT/content-single-product.php','dist/splits/product.html'])
            .pipe(concat('content-single-product.php'))
            .pipe(gulp.dest('integrator/WordPress/DRAFT/woocommerce/'));

            gulp.src(['integrator/WordPress/wc shop/CONTENT/content-product.php','dist/splits/category.html'])
            .pipe(concat('content-product.php'))
            .pipe(gulp.dest('integrator/WordPress/DRAFT/woocommerce/'));

            gulp.src(['integrator/WordPress/wc shop/CONTENT/content-product_cat.php','dist/splits/production.html'])
            .pipe(concat('content-product_cat.php'))
            .pipe(gulp.dest('integrator/WordPress/DRAFT/woocommerce/'));}

    }
    //////////////////////////////

});
gulp.task('splitter', function() {
    gulp.src('dist/*.html')
        .pipe(htmlsplit())
        .pipe(gulp.dest('dist/splits/'));
})

/////////////////////////COMPONENTS BLUEPRINT
gulp.task('blueprint-wright-json', [], function() {
    if(distoptions.izolate){
        var izolate = ',\n"izolate":"true"';

    } else var izolate =',\n"izolate":"false"';
    var str = '{"blueprint" : "'+options.name+'"'+izolate+'}';
    file('blueprint.json', str)
        .pipe(gulp.dest('blueprint/'));
});

gulp.task('merge-json', [], function() {
    gulp.src(['dev/**/*.json','blueprint/*.json'])
        .pipe(merge('data.json'))
        .pipe(gulp.dest('./'));
});
gulp.task('compile-blueprint-view-start',[],function () {
    data.blueprint = options.name;
    gulp.src('blueprint/*.pug')
        .pipe(pug({
            data: data,
            pretty: true,
        })).pipe(gulp.dest('blueprint/'));
})
gulp.task('compile-blueprint-view',[],function () {
    var obj = JSON.parse(fs.readFileSync('data.json', 'utf8'));
    gulp.src('blueprint/*.pug')
        .pipe(pug({
            data: obj,
            pretty: true,
        })).pipe(gulp.dest('blueprint/'));
})
gulp.task('compile-blueprint-sass',[],function () {
        gulp.src('blueprint/_blueprint.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('blueprint/'));
    if(distoptions.izolate){
        gulp.src('dev/MODULES/PROJECT MODULES/--'+data.blueprint+'/_starter.scss')
            .pipe(sass.sync().on('error', sass.logError))
            .pipe(gulp.dest('blueprint/'));

    }



})

gulp.task('start-blueprint-server',[],function () {
    var browserSyncComponent = require('browser-sync').create();

    browserSyncComponent.init({
        server: "blueprint",
        cssOutlining: true
    });
    gulp.watch("blueprint/*.html").on('change', browserSyncComponent.reload);
    gulp.watch("dist/*.css").on('change', browserSyncComponent.reload);

})




gulp.task('bp', [], function() {

    runSequence('blueprint-wright-json',
        ['merge-json', 'compile-blueprint-view-start','compile-blueprint-sass'],
        'start-blueprint-server');

});
gulp.task('buildblueprint', function buildHTML() {
    gulp.src('blueprint/*.pug')
        .pipe(pug({
            data: data,
            pretty: true,
        })).pipe(gulp.dest('blueprint/'));
    gulp.src('blueprint/_blueprint.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('blueprint/'));
});
gulp.task('mergeJson',function () {
    return gulp.src([
        'dev/{MODULES,ELEMENTS,SCRIPTS}/**/--*/*.json',
        'dev/templates/**/*.json',
        'dev/scss/MASTER_OPTIONS/*.json',
        'blueprint/*.json',
        '!dev/SOURCE_FABRIC/STORRAGE/**/*.json',
        '!dev/{MODULES,ELEMENTS,SCRIPTS}/**/--*/off_*.json'
    ])
        .pipe(merge('data.json'))
        .pipe(gulp.dest('./'));

})
gulp.task('cleanMainCss', function () {
    return gulp.src('dist/main.css', {read: false})
        .pipe(clean());
});

gulp.task('split-css', function () {
    return gulp.src('dist/main.css')
        .pipe(uncss({
            html: ['dist/**/*.html']
        }))
        .pipe(gulp.dest('dist/'));
});
var distData = {
    boolean: 'izolate',
    default: false,
};
var distoptions = minimist(process.argv.slice(2), distData);

gulp.task('tests',[], function () {
    if(distoptions.izolate){
            console.log('hello')
        }else{console.log('by by')}
    }
)

gulp.task('dist-module',[], function () {
    var str ="include ../../../templates/PAGESYSTEM/INCLUDES/_includes\n";
        gulp.src('dev/MODULES/PROJECT MODULES/--'+options.name+'/_include.pug').pipe(insert.prepend(str))
        .pipe(pug({
            data: data,
            pretty: true,
        })).pipe(gulp.dest('dev/MODULES/PROJECT MODULES/--'+options.name+'/DIST/'));
        var dest = 'dev/MODULES/PROJECT MODULES/--'+options.name+'/DIST/_include.html'
        gulp.src('dist/main.css')
        .pipe(uncss({
            html: [dest]
        }))
        .pipe(gulp.dest('dev/MODULES/PROJECT MODULES/--'+options.name+'/DIST/'));

});
gulp.task('testizmodul',[], function () {
    gulp.src('dev/MODULES/PROJECT MODULES/--pagination/_starter.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('blueprint/starter.css'));
})

var resW = {
    number: 'w',
    default: 0,
};
var resH = {
    number: 'hi',
    default: 'auto',
};
var cropTo = {
    string: 'to',
    default: 'Centr',
};
var imgPref = {
    string: 'prefix',
    default: false,
};
///////////////////////////////////////////////////////////////////IMAGES
var resOptionW = minimist(process.argv.slice(2), resW);
var resOptionH = minimist(process.argv.slice(2), resH);
var resOptionTo = minimist(process.argv.slice(2), cropTo);
var resOptionPref = minimist(process.argv.slice(2), imgPref);
var imageQ = 0;
gulp.task('crop', [], function() {
    var gravity='';
    switch (resOptionTo.to){
        case 'N': gravity = 'North';
            break;
        case 'NE': gravity = 'NorthEast';
            break;
        case 'E': gravity = 'East';
            break;
        case 'SE': gravity = 'SouthEast';
            break;
        case 'S': gravity = 'South';
            break;
        case 'SW': gravity = 'SouthWest';
            break;
        case 'W': gravity = 'West';
            break;
        case 'NW': gravity = 'NorthWest';
            break;
        default: gravity = 'Centr';
    }
    console.log(gravity)
    if(!resOptionW.w){
        gulp.src('dev/SOURCE FABRIC/HALL/*').pipe(foreach(function(stream, file){
            imageQ++;
            return stream
                .pipe(rename(function (path) {
                    if (resOptionPref.prefix){path.basename =resOptionPref.prefix+'-'+imageQ;}
                    else{path.basename +='-auto_X_'+resOptionH.hi; }}))
        }))
            .pipe(imageResize({
                gravity : gravity,
                height : resOptionH.hi,
                crop : true,
                upscale : false
            })).pipe(gulp.dest('dist/irs'));
    }else{
        gulp.src('dev/SOURCE FABRIC/HALL/*').pipe(foreach(function(stream, file){
            imageQ++;
            return stream
                .pipe(rename(function (path) {
                    if (resOptionPref.prefix){path.basename =resOptionPref.prefix+'-'+imageQ;}
                    else{path.basename +=resOptionW.w+'_X_'+resOptionH.hi; }}))

        }))
            .pipe(imageResize({
                gravity : gravity,
                width : resOptionW.w,
                height : resOptionH.hi,
                crop : true,
                upscale : false
            })).pipe(gulp.dest('dist/irs'));
    }


});

gulp.task('scale', [], function() {

    if(!resOptionW.w){
        gulp.src('dev/SOURCE FABRIC/HALL/*').pipe(foreach(function(stream, file){
            imageQ++;
            return stream
                .pipe(rename(function (path) {
                    if (resOptionPref.prefix){path.basename =resOptionPref.prefix+= '-'+imageQ;}
                    else{path.basename +='-autoX_'+resOptionH.hi; }}))

        }))
            .pipe(imageResize({
                height : resOptionH.hi,
                crop : false,
                upscale : true
            })).pipe(gulp.dest('dist/irs'));
    }else{
        gulp.src('dev/SOURCE FABRIC/HALL/*').pipe(foreach(function(stream, file){
            imageQ++;

            return stream
                .pipe(rename(function (path) {
                    if (resOptionPref.prefix){path.basename =resOptionPref.prefix+= '-'+imageQ;}
                    else{path.basename+='-'+resOptionW.w+'_X_auto' }}))

        }))
            .pipe(imageResize({
                width : resOptionW.w,
                height : resOptionH.hi,
                crop : false,
                upscale : true
            })).pipe(gulp.dest('dist/irs'));
    }


});
gulp.task('pb',[],function () {
    var browserSyncPb = require('browser-sync').create();

    browserSyncPb.init({
        server: "projectboard",
        cssOutlining: true
    });
    gulp.watch("projectboard/*.html").on('change', browserSyncPb.reload);
    gulp.watch("projectboard/*.css").on('change', browserSyncPb.reload);

})
//FONT


gulp.task('convertfonts', function () {
        gulp.src('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/**/*.{ttf,otf}', {read: false})
        .pipe(shell([
            'fontforge -script dev/SOURCE_FABRIC/FONT_LAB/SOURCE/script.pe <%= file.path %> dist/fonts/<%= f(file.path) %>.svg',
            'fontforge -script dev/SOURCE_FABRIC/FONT_LAB/SOURCE/script.pe <%= file.path %> dist/fonts/<%= f(file.path) %>.woff',
            'fontforge -script dev/SOURCE_FABRIC/FONT_LAB/SOURCE/script.pe <%= file.path %> dist/fonts/<%= f(file.path) %>.woff2',
            'fontforge -script dev/SOURCE_FABRIC/FONT_LAB/SOURCE/script.pe <%= file.path %> dist/fonts/<%= f(file.path) %>.eot',
            'fontforge -script dev/SOURCE_FABRIC/FONT_LAB/SOURCE/script.pe <%= file.path %> dist/fonts/<%= f(file.path) %>.ttf'


            ],
            {
            templateData: {
                f: function (s) {
                    var name = path.basename(s, path.extname(s));


                    return name
                }
            }
        })
        )
})
gulp.task('fontvars', function () {
    gulp.src('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/*.scss', {read: false})
        .pipe(clean());

    gulp.src('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/**/*.{ttf,otf}').pipe(foreach(function(stream, file){

        var name = path.basename(file.path, path.extname(file.path));
        var dirs = file.path.split('\\')
        var i = dirs.length;
        var stl = dirs[i-2];
        var weight = dirs[i-3];
        var family = dirs[i-4];
        var role  = dirs[i-5];
        console.log(!fs.existsSync('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/_'+role+'.scss'));
        if(!fs.existsSync('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/_'+role+'.scss')){fs.closeSync(fs.openSync('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/_'+role+'.scss', 'w'));}
        var str ="'"+name+"':('"+role+"','"+family+"','"+name+"',"+stl+","+weight+"),\n\t";
        gulp.src('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/_'+role+'.scss').pipe(insert.append(str)).pipe(gulp.dest('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/'));
        return stream
    }))
})


var fr = {
    string: 'role',
    default: '--MAIN',
};
var fontrole = minimist(process.argv.slice(2), fr);

gulp.task('regfont', function () {
    if (!fs.existsSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role)) fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role);
    fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name);
        fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Bold');
            fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Bold/italic');
            fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Bold/normal');
        fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Light');
            fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Light/italic');
            fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Light/normal');
        fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Normal');
            fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Normal/italic');
            fs.mkdirSync('dev/SOURCE_FABRIC/FONT_LAB/SOURCE/'+fontrole.role+'/'+options.name+'/Normal/normal');
})
gulp.task('wrapfontVars', function () {
    gulp.src('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/*.scss').pipe(foreach(function(stream, file){
        var name = (path.basename(file.path, path.extname(file.path))).slice(1,(path.basename(file.path, path.extname(file.path))).length);
        console.log(name);
        gulp.src('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/_'+name+'.scss').pipe(insert.wrap("'"+name+"':(", "),")).pipe(gulp.dest("dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/"));
        return stream;
    }))

});



gulp.task('concatVars', function () {
    gulp.src(['dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/*.scss'])
        .pipe(concat({ path: 'variables.scss', stat: { mode: 0666 }}))
        .pipe(insert.wrap('$FONTS:(', ');')).pipe(gulp.dest('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/'))
        .pipe(gulp.dest('dev/SOURCE_FABRIC/FONT_LAB/FONT_FACE/VARIABLES/'));
});
gulp.task('buildfonts', function() {


    runSequence(
        'convertfonts','fontvars'
                );

});
gulp.task('buildfonts2', function() {


    runSequence(
        ['wrapfontVars',
            'concatVars']);

});

//SASS VARIABLES TO JSON
gulp.task('sass-json', function () {
return gulp
    .src('dev/scss/MASTER_OPTIONS/*.scss')
    .pipe(sassJson())
    .pipe(gulp.dest('dev/scss/MASTER_OPTIONS/'));
});



////////////////////////////////////////////////////
gulp.task('bsold',[], function () {
    var elemData = {
        name: options.name
    }
    gulp.src('dev/SCRIPTS/SCRIPTS/_template.json.tpl')
        .pipe(rename('libs.json'))
        .pipe(template(elemData))
        .pipe(gulp.dest('dev/SCRIPTS/SCRIPTS/'+options.name+'/'));

    gulp.src('dev/SCRIPTS/SCRIPTS/_template.js.tpl')
        .pipe(rename(options.name+'.js'))
        .pipe(template(elemData))
        .pipe(gulp.dest('dev/SCRIPTS/SCRIPTS/'+options.name+'/'));
});

gulp.task('svgstore', function () {
    return gulp
        .src('dev/SOURCE_FABRIC/ICONS_COMBINER/icons/**/*.svg')
        .pipe(svgmin(function (file) {
            var prefix = path.basename(file.relative, path.extname(file.relative));
            return {
                plugins: [{
                    cleanupIDs: {
                        prefix: prefix + '-',
                        minify: true
                    }
                }]
            }
        }))
        .pipe(svgstore())
        .pipe(gulp.dest('dist/icons/'));
});
//////////////////////////////////////////////////////
gulp.task('START QUANT', function(){
    runSequence('WATCHER:NEW', 'SERVER')
});


/////UTILITIES
gulp.task('u-h2p', function() {
    // Backend locales
    return gulp.src('utilities/htmlToPug/inderx.html')
        .pipe(html2pug())
        .pipe(gulp.dest('utilities/htmlToPug/pr'));
});
gulp.task('deploycss', function () {
    return gulp.src('dist/main.css')
        .pipe(rename('template_styles.css'))
        .pipe(sftp({
            host: 'ove-cfo.ru',
            user: 'podpolkovnyk',
            pass: 'xM9KsjsJ',
            remotePath:'/var/www/podpolkovnyk/data/www/ove-cfo.ru/bitrix/templates/mobile'
        }));
});

// ICON FONT

var fontName = 'Icons';

gulp.task('iconfont', function(){
    gulp.src(['dev/SOURCE_FABRIC/ICONFONT/*.svg'])
        .pipe(iconfontCss({
            fontName: fontName,
            path:'dev/scss/_iconFont.tmp',
            targetPath: '../scss/_iconFont.scss',
            fontPath: 'fonts/icons/'
        }))
        .pipe(iconfont({
            fontName: fontName
        }))
        .pipe(gulp.dest('dist/fonts/icons/'));
});
gulp.task('cache', function (done) {
    return cache.clearAll(done);
});