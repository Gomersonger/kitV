<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hospital
 */
wp_head()
?>
<body>
<div class="hidden"><xml version="1.0" encoding="UTF-8"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg xmlns="http://www.w3.org/2000/svg"><symbol id="ambulance" viewBox="0 0 31.224 31.224"><path d="M21.427 24.268h-11.38a.5.5 0 0 1 0-1h11.379a.5.5 0 0 1 .001 1z"/><path d="M7.339 26.977a3.212 3.212 0 0 1-3.208-3.209c0-1.769 1.439-3.208 3.208-3.208s3.208 1.439 3.208 3.208a3.212 3.212 0 0 1-3.208 3.209zm0-5.417c-1.218 0-2.208.99-2.208 2.208s.991 2.209 2.208 2.209 2.208-.991 2.208-2.209-.99-2.208-2.208-2.208zM24.135 26.977a3.212 3.212 0 0 1-3.208-3.209c0-1.769 1.439-3.208 3.208-3.208s3.208 1.439 3.208 3.208a3.212 3.212 0 0 1-3.208 3.209zm0-5.417c-1.218 0-2.208.99-2.208 2.208s.991 2.209 2.208 2.209 2.208-.991 2.208-2.209-.99-2.208-2.208-2.208z"/><path d="M21.431 24.268H10.048a.5.5 0 0 1 0-1H21.43a.5.5 0 0 1 .001 1z"/><path d="M28.833 24.268h-1.992a.5.5 0 0 1 0-1h1.992a1.39 1.39 0 0 0 1.39-1.39v-1.931c0-.712-.29-1.409-.795-1.911l-2.244-2.23a.507.507 0 0 1-.102-.145l-1.839-3.98a2.282 2.282 0 0 0-2.065-1.32H2.584A1.585 1.585 0 0 0 1 11.944v9.934c0 .767.624 1.39 1.39 1.39h2.236a.5.5 0 0 1 0 1H2.39A2.393 2.393 0 0 1 0 21.878v-9.934A2.587 2.587 0 0 1 2.584 9.36h20.595c1.272 0 2.439.746 2.973 1.9l1.801 3.899 2.18 2.167a3.717 3.717 0 0 1 1.09 2.62v1.931a2.393 2.393 0 0 1-2.39 2.391z"/><path d="M23.623 17.394H13.22a.5.5 0 0 1 0-1h10.403a.5.5 0 0 1 0 1zM7.16 17.313a.5.5 0 0 1-.5-.5V13.06a.5.5 0 0 1 1 0v3.754a.499.499 0 0 1-.5.499z"/><path d="M9.037 15.437H5.283a.5.5 0 0 1 0-1h3.754a.5.5 0 0 1 0 1zM21.537 10.36h-3.25a.5.5 0 0 1-.5-.5v-.675c0-1.172.953-2.125 2.125-2.125s2.125.953 2.125 2.125v.675a.5.5 0 0 1-.5.5zm-2.75-1h2.25v-.175c0-.62-.505-1.125-1.125-1.125s-1.125.505-1.125 1.125v.175zM19.912 6.372a.5.5 0 0 1-.5-.5V4.747a.5.5 0 0 1 1 0v1.125a.5.5 0 0 1-.5.5zM21.896 7.143a.5.5 0 0 1-.354-.853l.781-.781a.5.5 0 0 1 .707.707l-.78.78a.5.5 0 0 1-.354.147zM17.928 7.143a.502.502 0 0 1-.354-.146l-.781-.781a.5.5 0 0 1 .707-.707l.781.781a.5.5 0 0 1-.353.853z"/></symbol><symbol id="arms" viewBox="0 0 57.577 57.577"><path d="M48.96 38.361L29.128 41.81l-5.633-5.633a.996.996 0 0 0-.707-.293h-10a1 1 0 0 0-1-1h-11v2h6v14h-6v2h11a1 1 0 0 0 1-1h2.764l10.691 5.346a3.263 3.263 0 0 0 3.108-.099l21.816-12.727a3.277 3.277 0 0 0 1.621-2.822c0-.967-.425-1.879-1.165-2.502a3.261 3.261 0 0 0-2.663-.719zM10.788 50.884h-2v-14h2v14zm39.371-8.208L28.344 55.403c-.37.216-.821.23-1.206.038L16.236 49.99a.997.997 0 0 0-.448-.106h-3v-12h9.586l7.879 7.879a1.83 1.83 0 0 1-2.586 2.586l-5.172-5.172-1.414 1.414 5.172 5.172a3.802 3.802 0 0 0 2.707 1.121 3.833 3.833 0 0 0 3.828-3.828 3.804 3.804 0 0 0-1.121-2.707l-.81-.81 18.444-3.208c.371-.067.747.037 1.034.279a1.266 1.266 0 0 1-.176 2.066zM56.788 6.884v-2h-6.281c-.182-.189-.435 0-.719 0h-4c-.553 0-1 0-1 1h-2.764L31.332.384c-.991-.496-2.153-.535-3.107.022L6.409 13.094a3.246 3.246 0 0 0-1.621 2.803A3.258 3.258 0 0 0 8.616 19.1l19.831-3.45 5.633 5.787c.188.187.442.447.708.447h10s.447 1 1 1h11v-2h-6v-14h6zm-21.586 13l-7.878-8.032c-.346-.346-.536-.883-.536-1.371 0-1.009.82-1.868 1.828-1.868.488 0 .947.171 1.293.517l5.172 5.161 1.414-1.419L31.324 7.7a3.8 3.8 0 0 0-2.708-1.124 3.833 3.833 0 0 0-3.828 3.828c0 1.021.397 1.982 1.121 2.707l.809.809-18.444 3.208a1.265 1.265 0 0 1-1.486-1.25c0-.45.241-.87.629-1.096L29.232 2.056c.37-.215.821-.23 1.206-.038L41.34 7.624c.139.069.293.26.448.26h3v12h-9.586zm11.586-13h2v14h-2v-14zM28.788 23.932c-1.629-1.426-4.175-1.389-5.757.116a3.928 3.928 0 0 0 0 5.736l5.067 4.824a1 1 0 0 0 1.379.001l5.067-4.824a3.929 3.929 0 0 0 .001-5.737v-.001c-1.583-1.505-4.129-1.54-5.757-.115zm4.378 4.403l-4.378 4.168-4.378-4.168c-.4-.382-.622-.886-.622-1.419s.221-1.038.622-1.42c.431-.41.997-.615 1.562-.615.566 0 1.132.205 1.562.615l.563.536c.387.367.992.367 1.379 0l.563-.536c.861-.82 2.262-.819 3.125-.001.403.383.624.888.624 1.421s-.222 1.037-.622 1.419z"/><path d="M17.184 21.049l-1.658-1.119c-.398.59-.76 1.21-1.073 1.841l1.791.891c.273-.553.59-1.095.94-1.613zM13.123 32.159c.146.698.339 1.39.574 2.053l1.885-.666a14.035 14.035 0 0 1-.502-1.797l-1.957.41zM13.085 25.802l1.963.383c.119-.61.28-1.216.479-1.802l-1.895-.643c-.227.67-.41 1.364-.547 2.062zM12.788 28.887c.001.389.015.775.042 1.158l1.994-.141a14.015 14.015 0 0 1-.011-1.867l-1.996-.123a16.48 16.48 0 0 0-.029.973zM41.992 24.218c.208.589.376 1.193.501 1.796l1.959-.406a16.283 16.283 0 0 0-.573-2.054l-1.887.664zM40.393 36.715l1.656 1.121a15.94 15.94 0 0 0 1.075-1.842l-1.791-.891a13.681 13.681 0 0 1-.94 1.612zM42.05 33.383l1.895.643c.228-.67.411-1.363.548-2.062l-1.963-.383a14.02 14.02 0 0 1-.48 1.802zM44.788 28.887c.001-.393-.014-.783-.042-1.17l-1.994.146a13.916 13.916 0 0 1 .011 1.865l1.996.123c.019-.321.029-.643.029-.964z"/></symbol><symbol id="book" viewBox="0 0 76.00 76.00"><path d="M22 47c4.424 1.303 12.483 1.805 15.208 5.215V33C34.483 29.59 26.424 29.087 22 27.784V47zm0-22.692v-.28c4.424 1.303 12.483 1.806 15.208 5.216l.792.228.792-.256C41.517 25.806 49.577 25.303 54 24v.28c1.229.37 2 .692 2 .692v3l3-1.146v24.146s-17.833 1.25-21 6.791v.028C34.833 52.25 17 51 17 51V26.854L20 28v-3s.771-.322 2-.692zm1.5 20.198v-3.122c3.769.859 8.96 1.435 12 3.366v3.121c-3.04-1.93-8.231-2.506-12-3.365zm0-5.385V36c3.769.858 8.96 1.434 12 3.365v3.121c-3.04-1.93-8.231-2.506-12-3.365zm0-5.487v-3.121c3.769.858 8.96 1.434 12 3.365V37c-3.04-1.931-8.231-2.507-12-3.366zM54 46.972V27.756c-4.423 1.303-12.483 1.806-15.208 5.216v19.215c2.725-3.41 10.785-3.912 15.208-5.215zm-1.5-2.494c-3.769.859-8.96 1.434-12 3.365v-3.121c3.04-1.931 8.231-2.507 12-3.366v3.122zm0-5.385c-3.769.859-8.96 1.434-12 3.365v-3.121c3.04-1.931 8.231-2.507 12-3.365v3.121zm0-5.487c-3.769.859-8.96 1.435-12 3.366V33.85c3.04-1.931 8.231-2.507 12-3.365v3.121z"/></symbol><symbol id="brain" viewBox="0 0 512 512"><path d="M274.573 0C169.075 0 83.246 85.828 83.246 191.326v20.001L47.576 300.5a20.583 20.583 0 0 0 2.068 19.204 20.581 20.581 0 0 0 17.063 9.053H90.03a4 4 0 0 1 3.995 3.995v55.543c0 14.72 11.974 26.694 26.694 26.694h46.013a2.749 2.749 0 0 1 2.745 2.745v75.351c0 10.429 8.485 18.914 18.914 18.914h258.593c10.429 0 18.914-8.485 18.914-18.914v-301.76C465.899 85.828 380.071 0 274.573 0zm175.158 493.086a2.749 2.749 0 0 1-2.745 2.745H188.392a2.749 2.749 0 0 1-2.745-2.745v-75.351c0-10.429-8.485-18.914-18.914-18.914H120.72c-5.803 0-10.526-4.722-10.526-10.526v-55.543c0-11.117-9.045-20.163-20.163-20.163H66.708c-2.125 0-3.277-1.364-3.673-1.95-.397-.585-1.234-2.161-.446-4.134l36.247-90.62a8.09 8.09 0 0 0 .579-3.003v-21.558c0-96.583 78.575-175.158 175.158-175.158s175.158 78.575 175.158 175.158v301.762z"/><path d="M285.352 43.116h-21.558c-75.901 0-137.432 61.531-137.432 137.432v42.035c0 11.015 8.929 19.944 19.944 19.944h12.393v28.077c-13.308 3.779-22.836 16.633-21.418 31.424 1.372 14.306 13.123 25.697 27.463 26.662 17.264 1.162 31.682-12.553 31.682-29.573 0-13.542-9.132-24.983-21.558-28.513v-28.077h91.621v114.309c-13.308 3.779-22.836 16.633-21.418 31.423 1.372 14.306 13.122 25.698 27.462 26.663 17.264 1.162 31.682-12.553 31.682-29.573 0-13.542-9.132-24.983-21.558-28.512V242.526h14.629a8.084 8.084 0 0 0 0-16.168h-150.98a3.775 3.775 0 0 1-3.776-3.776V199.41h45.18c16.13 0 29.781-12.622 30.26-28.745.497-16.752-12.987-30.539-29.629-30.539h-10.44c-4.427 0-8.287 3.41-8.419 7.835a8.084 8.084 0 0 0 8.081 8.333h10.384c7.012 0 13.15 5.193 13.807 12.175.755 8.011-5.554 14.773-13.412 14.773h-45.81v-2.695c0-66.972 54.291-121.263 121.263-121.263h13.474v66.93c0 7.331-5.668 13.648-12.993 13.905-7.568.264-13.823-5.75-13.952-13.229-.072-4.185-3.096-7.866-7.261-8.279a8.086 8.086 0 0 0-8.91 8.043c0 16.643 13.787 30.126 30.539 29.629 16.122-.479 28.745-14.13 28.745-30.26v-16.096a29.448 29.448 0 0 0 13.474 3.253c16.155 0 29.334-12.992 29.637-29.076.081-4.299-2.963-8.177-7.24-8.608a8.086 8.086 0 0 0-8.923 8.042c0 7.858-6.762 14.167-14.773 13.412-6.982-.658-12.175-6.795-12.175-13.807V59.56c49.171 3.253 90.419 35.942 106.243 80.566h-38.244c-16.13 0-29.781 12.622-30.26 28.745-.497 16.752 12.986 30.539 29.629 30.539h10.44c4.427 0 8.287-3.41 8.419-7.835a8.084 8.084 0 0 0-8.081-8.333h-10.384c-7.012 0-13.15-5.193-13.807-12.175-.755-8.011 5.554-14.773 13.412-14.773h43.116c.086 0 .169-.011.254-.013 1.6 7.843 2.44 15.957 2.44 24.266v42.035a3.775 3.775 0 0 1-3.776 3.776h-66.174a8.084 8.084 0 0 0 0 16.168h37.613v28.077c-13.308 3.779-22.836 16.633-21.418 31.424 1.372 14.306 13.123 25.697 27.463 26.662 17.264 1.162 31.681-12.553 31.681-29.573 0-13.542-9.132-24.983-21.558-28.513v-28.077h12.393c11.015 0 19.944-8.929 19.944-19.944v-42.035c.001-75.901-61.529-137.431-137.43-137.431zm2.694 342.231c0 7.43-6.044 13.474-13.474 13.474s-13.474-6.044-13.474-13.474 6.044-13.474 13.474-13.474c7.429.001 13.474 6.044 13.474 13.474zm-107.789-86.231c0 7.43-6.044 13.474-13.474 13.474s-13.474-6.044-13.474-13.474 6.044-13.474 13.474-13.474 13.474 6.044 13.474 13.474zm215.579 0c0 7.43-6.044 13.474-13.474 13.474s-13.474-6.044-13.474-13.474 6.044-13.474 13.474-13.474 13.474 6.044 13.474 13.474z"/></symbol><symbol id="bus" viewBox="0 0 76.00 76.00"><path d="M47.5 57a1.583 1.583 0 0 1-1.583-1.583V52.25H30.083v3.167c0 .874-.709 1.583-1.583 1.583h-1.583a1.583 1.583 0 0 1-1.584-1.583V52.25h-3.166l1.583-26.125C23.75 22.19 30.13 19 38 19s14.25 3.19 14.25 7.125l1.583 26.125h-3.166v3.167c0 .874-.71 1.583-1.584 1.583H47.5zM27.708 42.75a2.375 2.375 0 1 0 0 4.75 2.375 2.375 0 0 0 0-4.75zm20.584 0a2.375 2.375 0 1 0 0 4.75 2.375 2.375 0 0 0 0-4.75zM31.667 22.167a.792.792 0 1 0 0 1.583h12.666a.792.792 0 1 0 0-1.583H31.667zm-5.938 15.437h24.542l-1.188-10.291c0-.875-.709-1.584-1.583-1.584h-19c-.875 0-1.583.71-1.583 1.584l-1.188 10.291z"/></symbol><symbol id="close" viewBox="0 0 348.333 348.334"><path d="M336.559 68.611L231.016 174.165l105.543 105.549c15.699 15.705 15.699 41.145 0 56.85-7.844 7.844-18.128 11.769-28.407 11.769-10.296 0-20.581-3.919-28.419-11.769L174.167 231.003 68.609 336.563c-7.843 7.844-18.128 11.769-28.416 11.769-10.285 0-20.563-3.919-28.413-11.769-15.699-15.698-15.699-41.139 0-56.85l105.54-105.549L11.774 68.611c-15.699-15.699-15.699-41.145 0-56.844 15.696-15.687 41.127-15.687 56.829 0l105.563 105.554L279.721 11.767c15.705-15.687 41.139-15.687 56.832 0 15.705 15.699 15.705 41.145.006 56.844z"/></symbol><symbol id="eye.hide" viewBox="0 0 76.00 76.00"><path d="M38 33.154a4.846 4.846 0 1 1 0 9.692 4.846 4.846 0 0 1 0-9.692zm0-8.077c11.308 0 21 8.077 21 12.923s-9.692 12.923-21 12.923S17 42.846 17 38s9.692-12.923 21-12.923zm0 4.038a8.885 8.885 0 1 0 0 17.77 8.885 8.885 0 0 0 0-17.77zm-13.753 19.81a30.71 30.71 0 0 0 3.909 1.748l-13.45 13.45a35.21 35.21 0 0 1-2.829-2.829l12.37-12.369zm27.506-21.85a30.71 30.71 0 0 0-3.909-1.748l13.45-13.45c.996.889 1.94 1.833 2.829 2.829l-12.37 12.37z"/></symbol><symbol id="eye" viewBox="0 0 76.00 76.00"><path d="M38 33.154a4.846 4.846 0 1 1 0 9.692 4.846 4.846 0 0 1 0-9.692zm0-8.077c11.308 0 21 8.077 21 12.923s-9.692 12.923-21 12.923S17 42.846 17 38s9.692-12.923 21-12.923zm0 4.038a8.885 8.885 0 1 0 0 17.77 8.885 8.885 0 0 0 0-17.77z"/></symbol><symbol id="facebook" viewBox="0 0 90 90"><path d="M90 15.001C90 7.119 82.884 0 75 0H15C7.116 0 0 7.119 0 15.001v59.998C0 82.881 7.116 90 15.001 90H45V56H34V41h11v-5.844C45 25.077 52.568 16 61.875 16H74v15H61.875C60.548 31 59 32.611 59 35.024V41h15v15H59v34h16c7.884 0 15-7.119 15-15.001V15.001z"/></symbol><symbol id="heart" viewBox="0 0 217.061 217.061"><path d="M182.198 205.491c-6.62 7.785-17.241 11.569-32.467 11.569h-.008c-6.335-.001-13.6-.681-21.592-2.021-66.912-11.219-70.308-34.4-70.308-71.295 0-27.397 17.425-37.19 28.179-40.625-6.74-6.68-16.894-19.259-19.569-36.382-3.199-20.477 8.116-32.872 13.94-37.769l-5.496-8.878a3.999 3.999 0 0 1 .436-4.79l7.752-8.562a4 4 0 0 1 6.48.776l6.927 12.752 2.828-.636-1.497-13.178A4.004 4.004 0 0 1 101.777 2h11.605a4 4 0 0 1 4 3.943l.132 9.239 3.766-.128 1.706-11.634a4.005 4.005 0 0 1 4.358-3.399l9.938 1a4 4 0 0 1 3.586 4.305l-1.298 15.946 8.303 10.167a4.002 4.002 0 0 1-.751 5.769c-.179.13-17.976 13.117-23.929 24.322-3.547 6.678-3.332 13.618-1.286 17.021.542.902 1.181 1.463 1.665 1.463l.125-.01c.736-.458 1.81-3.803 2.521-6.017 1.522-4.744 3.418-10.647 7.926-16.11 7.304-8.849 19.067-15.523 27.363-15.523 2.592 0 4.786.629 6.521 1.868 6.455 4.61 7.282 19.607 7.381 24.094a4 4 0 0 1-3.083 3.982l-12.937 3.044c-1.98.466-5.396 1.528-6.012 3.4-.384 1.167-.434 4.876 7.385 14.091 10.742 12.661 20.844 26.847 26.392 60.924 2.648 16.261 6.273 38.531-4.956 51.734zM69.428 97.372c-.119-.208-11.955-20.898-13.186-33.036-1.112-10.959 3.209-16.138 3.356-16.312a4 4 0 0 0-1.078-6.22c-.479-.256-4.831-2.5-9.803-2.5-3.324 0-6.288 1.035-8.571 2.992-5.669 4.859-4.685 23.784-3.35 36.148-3.29 3.288-7.141 11.399-9.249 30.762-3.204 29.435 14.911 49.486 15.684 50.325a4 4 0 0 0 2.943 1.291h.042a4.001 4.001 0 0 0 3.899-4.79c-.229-2.515-1.404-17.81 2.393-31.84 3.869-14.3 15.376-21.317 15.48-21.379a3.998 3.998 0 0 0 1.44-5.441z"/></symbol><symbol id="magnify" viewBox="0 0 76.00 76.00"><path d="M42.5 22C49.404 22 55 27.596 55 34.5S49.404 47 42.5 47c-2.364 0-4.575-.657-6.5-1.757l-9.025 9.025a3 3 0 0 1-4.243-4.243l9.065-9.064A12.442 12.442 0 0 1 30 34.5C30 27.596 35.596 22 42.5 22zm0 4a8.5 8.5 0 1 0 0 17 8.5 8.5 0 0 0 0-17z"/></symbol><symbol id="mail" viewBox="0 0 76.00 76.00"><path d="M21.5 23h33c1.749 0 3.5 1.751 3.5 3.5v23c0 1.749-1.751 3.5-3.5 3.5h-33c-1.749 0-3.5-1.751-3.5-3.5v-23c0-1.749 1.751-3.5 3.5-3.5zm.5 24c0 1.312.688 2 2 2h28c1.312 0 2-.688 2-2V29L40.656 42.657a3.167 3.167 0 0 1-4.478 0L22 29v18zm3-20l11.738 11.738a2.375 2.375 0 0 0 3.358 0L52 27H25z"/></symbol><symbol id="menu" viewBox="0 0 32 32"><path d="M4 10h24a2 2 0 0 0 0-4H4a2 2 0 0 0 0 4zm24 4H4a2 2 0 0 0 0 4h24a2 2 0 0 0 0-4zm0 8H4a2 2 0 0 0 0 4h24a2 2 0 0 0 0-4z"/></symbol><symbol id="phone" viewBox="0 0 76.00 76.00"><path d="M50.922 54.233c.115.27.172.544.172.822 0 .385-.102.744-.306 1.077-.205.333-.491.588-.86.764l-1.73.81a9.534 9.534 0 0 1-2.028.669 10.16 10.16 0 0 1-5.35-.347c-1.087-.37-2.126-.9-3.118-1.59a15.834 15.834 0 0 1-2.791-2.5 19.351 19.351 0 0 1-2.335-3.27 40.144 40.144 0 0 1-1.38-2.283c-.41-.728-.877-1.6-1.403-2.617a54.259 54.259 0 0 1-1.592-3.384 43.162 43.162 0 0 1-1.304-3.249 46.187 46.187 0 0 1-.746-2.31 15.21 15.21 0 0 1-.423-1.84 19.548 19.548 0 0 1-.822-5.622c0-1.202.12-2.36.362-3.473a12.344 12.344 0 0 1 1.11-3.104c.5-.958 1.132-1.814 1.9-2.568a9.324 9.324 0 0 1 2.72-1.844l1.707-.785c.27-.115.54-.172.81-.172.38 0 .734.105 1.061.316.327.21.573.502.736.874l3.283 7.455c.115.27.172.54.172.81 0 .397-.102.764-.307 1.102-.204.337-.493.59-.865.758l-3.375 1.552a2.254 2.254 0 0 0-1.024.902 2.455 2.455 0 0 0-.356 1.282c0 .348.065.675.196.982l5.54 12.653c.218.486.517.844.9 1.073a2.339 2.339 0 0 0 2.188.135l3.374-1.552a1.934 1.934 0 0 1 1.86.144c.33.21.58.5.748.868l3.276 7.462z"/></symbol><symbol id="smile" viewBox="0 0 438.533 438.533"><path d="M409.132 109.205c-19.608-33.592-46.205-60.189-79.798-79.796C295.733 9.803 259.054.002 219.273.002c-39.781 0-76.47 9.801-110.063 29.407-33.595 19.604-60.192 46.201-79.8 79.796C9.801 142.802 0 179.491 0 219.269c0 39.78 9.804 76.463 29.407 110.062 19.607 33.592 46.204 60.189 79.799 79.798 33.597 19.603 70.283 29.403 110.063 29.403s76.47-9.801 110.065-29.403c33.593-19.608 60.189-46.206 79.795-79.798 19.603-33.599 29.403-70.284 29.403-110.062.001-39.782-9.8-76.472-29.4-110.064zm-21.699 181.01c-9.709 22.556-22.696 41.973-38.969 58.245-16.271 16.269-35.689 29.26-58.245 38.965-22.555 9.712-46.202 14.564-70.946 14.564s-48.391-4.859-70.948-14.564c-22.554-9.705-41.971-22.696-58.245-38.965-16.269-16.275-29.259-35.687-38.97-58.245-9.707-22.552-14.562-46.206-14.562-70.946 0-24.744 4.854-48.391 14.562-70.948 9.707-22.554 22.697-41.968 38.97-58.245 16.274-16.269 35.691-29.26 58.245-38.97 22.554-9.704 46.205-14.558 70.948-14.558 24.74 0 48.395 4.851 70.946 14.558 22.556 9.707 41.97 22.698 58.245 38.97 16.272 16.274 29.26 35.688 38.969 58.245 9.709 22.554 14.564 46.201 14.564 70.948.004 24.744-4.855 48.397-14.564 70.946z"/><path d="M312.06 247.533c-4.757-1.532-9.418-1.136-13.99 1.144s-7.617 5.899-9.13 10.849c-4.754 15.229-13.562 27.555-26.412 36.973-12.844 9.421-27.265 14.134-43.255 14.134-15.986 0-30.402-4.716-43.252-14.134-12.847-9.421-21.65-21.744-26.409-36.973-1.521-4.949-4.521-8.569-8.992-10.849-4.473-2.279-9.087-2.676-13.846-1.144-4.949 1.52-8.564 4.518-10.85 8.987-2.284 4.469-2.666 9.096-1.141 13.846 7.039 23.038 20.173 41.593 39.397 55.679 19.226 14.086 40.924 21.121 65.096 21.121 24.169 0 45.873-7.035 65.098-21.121 19.212-14.093 32.347-32.641 39.389-55.679 1.533-4.75 1.15-9.377-1.136-13.846-2.293-4.469-5.817-7.459-10.567-8.987zM146.181 182.727c10.085 0 18.699-3.576 25.837-10.709 7.139-7.135 10.708-15.749 10.708-25.837 0-10.089-3.569-18.699-10.708-25.837s-15.752-10.709-25.837-10.709c-10.088 0-18.702 3.571-25.84 10.709-7.135 7.139-10.707 15.749-10.707 25.837s3.568 18.702 10.707 25.837c7.141 7.136 15.751 10.709 25.84 10.709zM292.359 109.633c-10.089 0-18.706 3.571-25.845 10.709-7.132 7.139-10.708 15.749-10.708 25.837s3.576 18.702 10.708 25.837c7.139 7.137 15.756 10.709 25.845 10.709 10.081 0 18.698-3.576 25.837-10.709 7.139-7.135 10.708-15.749 10.708-25.837 0-10.089-3.569-18.699-10.708-25.837s-15.756-10.709-25.837-10.709z"/></symbol><symbol id="syringe" viewBox="0 0 463 463"><path d="M287.5 104H255V15h16.5c4.143 0 7.5-3.358 7.5-7.5S275.643 0 271.5 0h-80c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h16.348l.304 89H175.5c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5H192v225.233c0 6.24 1.83 12.283 5.291 17.473L224 401.771V455.5c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-53.729l26.709-40.064A31.399 31.399 0 0 0 271 344.234V119h16.5c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zm-64.652-89H240v89h-16.848l-.304-89zm30.381 338.385c0 .001 0 .001 0 0L231.5 385.979l-21.729-32.594a16.443 16.443 0 0 1-2.771-9.152V287h49v57.233a16.44 16.44 0 0 1-2.771 9.152zM256 272h-49V119h49v153z"/><path d="M223.5 304c-1.97 0-3.91.8-5.3 2.2a7.528 7.528 0 0 0-2.2 5.3c0 1.97.8 3.91 2.2 5.3 1.39 1.4 3.33 2.2 5.3 2.2s3.91-.8 5.3-2.2c1.4-1.39 2.2-3.33 2.2-5.3 0-1.97-.8-3.91-2.2-5.3a7.528 7.528 0 0 0-5.3-2.2zM239.5 328a7.51 7.51 0 0 0-7.5 7.5 7.51 7.51 0 0 0 7.5 7.5 7.512 7.512 0 0 0 7.5-7.5 7.51 7.51 0 0 0-7.5-7.5z"/></symbol><symbol id="twitter" viewBox="0 0 410.155 410.155"><path d="M403.632 74.18a162.414 162.414 0 0 1-28.28 9.537 88.177 88.177 0 0 0 23.275-37.067c1.295-4.051-3.105-7.554-6.763-5.385a163.188 163.188 0 0 1-43.235 17.862 11.02 11.02 0 0 1-2.702.336c-2.766 0-5.455-1.027-7.57-2.891-16.156-14.239-36.935-22.081-58.508-22.081-9.335 0-18.76 1.455-28.014 4.325-28.672 8.893-50.795 32.544-57.736 61.724-2.604 10.945-3.309 21.9-2.097 32.56a3.166 3.166 0 0 1-.797 2.481 3.278 3.278 0 0 1-2.753 1.091c-62.762-5.831-119.358-36.068-159.363-85.14-2.04-2.503-5.952-2.196-7.578.593-7.834 13.44-11.974 28.812-11.974 44.454 0 23.972 9.631 46.563 26.36 63.032a79.24 79.24 0 0 1-20.169-7.808c-3.06-1.7-6.825.485-6.868 3.985-.438 35.612 20.412 67.3 51.646 81.569a79.567 79.567 0 0 1-16.786-1.399c-3.446-.658-6.341 2.611-5.271 5.952 10.138 31.651 37.39 54.981 70.002 60.278-27.066 18.169-58.585 27.753-91.39 27.753l-10.227-.006c-3.151 0-5.816 2.054-6.619 5.106-.791 3.006.666 6.177 3.353 7.74 36.966 21.513 79.131 32.883 121.955 32.883 37.485 0 72.549-7.439 104.219-22.109 29.033-13.449 54.689-32.674 76.255-57.141 20.09-22.792 35.8-49.103 46.692-78.201 10.383-27.737 15.871-57.333 15.871-85.589v-1.346c-.001-4.537 2.051-8.806 5.631-11.712a174.776 174.776 0 0 0 35.16-38.591c2.573-3.849-1.485-8.673-5.719-6.795z"/></symbol><symbol id="user" viewBox="0 0 76.00 76.00"><path d="M38 19c5.542 0 7.917 3.167 7.117 9.813a2.374 2.374 0 0 1-.51 4.342c-.413 1.468-1.053 2.768-1.857 3.808v4.995c2.639.528 4.75.792 7.917 2.375 3.166 1.584 4.222 3.035 6.333 5.146V57H19v-7.52c2.111-2.112 3.167-3.563 6.333-5.147 3.167-1.583 5.278-1.847 7.917-2.375v-4.995c-.804-1.04-1.444-2.34-1.856-3.808a2.376 2.376 0 0 1-.511-4.342C30.083 22.167 32.458 19 38 19z"/></symbol><symbol id="vk" viewBox="0 0 548.358 548.358"><path d="M545.451 400.298c-.664-1.431-1.283-2.618-1.858-3.569-9.514-17.135-27.695-38.167-54.532-63.102l-.567-.571-.284-.28-.287-.287h-.288c-12.18-11.611-19.893-19.418-23.123-23.415-5.91-7.614-7.234-15.321-4.004-23.13 2.282-5.9 10.854-18.36 25.696-37.397 7.807-10.089 13.99-18.175 18.556-24.267 32.931-43.78 47.208-71.756 42.828-83.939l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712-4.764-1.427-10.853-1.663-18.278-.712l-82.224.568c-1.332-.472-3.234-.428-5.712.144l-3.713.859-1.431.715-1.136.859c-.952.568-1.999 1.567-3.142 2.995-1.137 1.423-2.088 3.093-2.848 4.996-8.952 23.031-19.13 44.444-30.553 64.238-7.043 11.803-13.511 22.032-19.418 30.693-5.899 8.658-10.848 15.037-14.842 19.126-4 4.093-7.61 7.372-10.852 9.849-3.237 2.478-5.708 3.525-7.419 3.142-1.715-.383-3.33-.763-4.859-1.143-2.663-1.714-4.805-4.045-6.42-6.995-1.622-2.95-2.714-6.663-3.285-11.136-.568-4.476-.904-8.326-1-11.563-.089-3.233-.048-7.806.145-13.706.198-5.903.287-9.897.287-11.991 0-7.234.141-15.085.424-23.555.288-8.47.521-15.181.716-20.125.194-4.949.284-10.185.284-15.705s-.336-9.849-1-12.991a44.442 44.442 0 0 0-2.99-9.137c-1.335-2.95-3.289-5.232-5.853-6.852-2.569-1.618-5.763-2.902-9.564-3.856-10.089-2.283-22.936-3.518-38.547-3.71-35.401-.38-58.148 1.906-68.236 6.855-3.997 2.091-7.614 4.948-10.848 8.562-3.427 4.189-3.905 6.475-1.431 6.851 11.422 1.711 19.508 5.804 24.267 12.275l1.715 3.429c1.334 2.474 2.666 6.854 3.999 13.134 1.331 6.28 2.19 13.227 2.568 20.837.95 13.897.95 25.793 0 35.689-.953 9.9-1.853 17.607-2.712 23.127-.859 5.52-2.143 9.993-3.855 13.418-1.715 3.426-2.856 5.52-3.428 6.28-.571.76-1.047 1.239-1.425 1.427a21.387 21.387 0 0 1-7.71 1.431c-2.667 0-5.901-1.334-9.707-4-3.805-2.666-7.754-6.328-11.847-10.992-4.093-4.665-8.709-11.184-13.85-19.558-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267-4.952-10.185-9.329-20.037-13.134-29.554-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-.859c-.95-.76-2.475-1.567-4.567-2.427a30.301 30.301 0 0 0-6.567-1.854l-78.229.568c-7.994 0-13.418 1.811-16.274 5.428l-1.143 1.711c-.571.953-.859 2.475-.859 4.57 0 2.094.571 4.664 1.714 7.707 11.42 26.84 23.839 52.725 37.257 77.659 13.418 24.934 25.078 45.019 34.973 60.237 9.897 15.229 19.985 29.602 30.264 43.112 10.279 13.515 17.083 22.176 20.412 25.981 3.333 3.812 5.951 6.662 7.854 8.565l7.139 6.851c4.568 4.569 11.276 10.041 20.127 16.416 8.853 6.379 18.654 12.659 29.408 18.85 10.756 6.181 23.269 11.225 37.546 15.126 14.275 3.905 28.169 5.472 41.684 4.716h32.834c6.659-.575 11.704-2.669 15.133-6.283l1.136-1.431c.764-1.136 1.479-2.901 2.139-5.276.668-2.379 1-5 1-7.851-.195-8.183.428-15.558 1.852-22.124 1.423-6.564 3.045-11.513 4.859-14.846 1.813-3.33 3.859-6.14 6.136-8.418 2.282-2.283 3.908-3.666 4.862-4.142.948-.479 1.705-.804 2.276-.999 4.568-1.522 9.944-.048 16.136 4.429 6.187 4.473 11.99 9.996 17.418 16.56 5.425 6.57 11.943 13.941 19.555 22.124 7.617 8.186 14.277 14.271 19.985 18.274l5.708 3.426c3.812 2.286 8.761 4.38 14.853 6.283 6.081 1.902 11.409 2.378 15.984 1.427l73.087-1.14c7.229 0 12.854-1.197 16.844-3.572 3.998-2.379 6.373-5 7.139-7.851.764-2.854.805-6.092.145-9.712-.677-3.611-1.344-6.136-2.008-7.563z"/></symbol></svg></div>
<header class="mainHeader">
    <div class="container">
        <div class="row">
            <div class="col-1-tp col-3-m logo">
                <h1><a class="logo__link" href="/"><?php the_custom_logo();?> </a></h1>
            </div>
            <div class="col-5-m col-10-tp col-9-d headerSectionDivider">
                <svg class="icon hamburger">
                    <use xlink:href="#menu"></use>
                </svg>
                <nav class="lightMenu" role="navigation">
                    <ul class="lightMenu__list">
                        <li class="lightMenu__item "><a href="dispanser.html">Диспанцеризация</a></li>
                        <li class="lightMenu__item "><a href="pay.html">Платные услуги</a></li>
                        <li class="lightMenu__item "><a href="docs.html">Документы</a></li>
                        <li class="lightMenu__item "><a href="2SIDERBARINNER-docs.html">Мед работникам</a></li>
                        <li class="lightMenu__item "><a href="pacients.html">Пациентам</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-4-m col-1-tp col-2-d">
                <div class="row">
                    <div class="col-12-tp col-12-m col-6-d headerSectionDivider js-trigger" data-action="search">
                        <div class="headerSection">
                            <svg class="icon headerIcon searchIcon">
                                <use xlink:href="#magnify"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6-d headerSectionDivider js-trigger visible-d visible-dl" data-action="xRayView">
                        <div class="headerSection">
                            <svg class="icon headerIcon">
                                <use xlink:href="#eye"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12-m col-12-tp searchCtn">
                <div class="searchWrapper">
                    <input class="ove-cardRegInput headerSearch" type="text" placeholder="Это плейсхолдер"/>
                </div>
            </div>
        </div>
        <div class="col-12-tp hidden">
            <div class="x-rayBlock">
                <div class="ButoonFont-size minimumFont content-center"><span>Размер текста 10px</span></div>
                <div class="Med ButoonFont-size mediumFont content-center"><span>Размер текста 24px</span></div>
                <div class="Max ButoonFont-size maximumFont content-center"><span>Размер текста 64px<!-- split index.html --></span></div>
                <div class="Butoon-color"></div>
            </div>
        </div>
    </div>
</header>