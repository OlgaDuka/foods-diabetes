<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name')?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <?php wp_head(); ?>
  </head>
  <body>
    <!-- SVG-sprite -->
    <div style="display: none">
      <svg xmlns="http://www.w3.org/2000/svg"><symbol id="close-envelope" viewBox="0 0 14 14"><path d="M7 9L5.268 7.484.316 11.729c.18.167.423.271.691.271h11.986c.267 0 .509-.104.688-.271L8.732 7.484 7 9z" data-original="#030104" class="active-path" data-old_color="#F9F9FB" fill="#FCFCFC"/><path d="M13.684 2.271A1.007 1.007 0 0 0 12.993 2H1.007c-.267 0-.509.104-.689.273L7 8l6.684-5.729zM0 2.878v8.308l4.833-4.107zM9.167 7.079L14 11.186V2.875z" data-original="#030104" class="active-path" data-old_color="#F9F9FB" fill="#FCFCFC"/></symbol><symbol id="community" viewBox="0 0 512.001 512.001"><path d="M212.623 108.789c3.203 9.791 9.923 18 18.662 23.134v4.464l-33.068 12.949c-3.049 1.103-28.928 11.43-28.928 44.332v28.799c0 4.464 3.618 8.09 8.084 8.09h20.539a8.083 8.083 0 0 0 8.084-8.084 8.084 8.084 0 0 0-8.084-8.084h-12.456v-20.722c0-22.367 17.487-28.854 18.166-29.096.125-.042.25-.087.372-.136l30.283-11.86 16.085 15.665a8.087 8.087 0 0 0 5.64 2.294l.128-.001a8.086 8.086 0 0 0 5.693-2.474l15.188-15.765 30.215 12.116c.142.057.288.11.432.16.182.061 18.167 6.369 18.167 29.095v20.722H223.598a8.083 8.083 0 0 0-8.084 8.084 8.084 8.084 0 0 0 8.084 8.084h110.311c4.464 0 8.084-3.675 8.084-8.14v-28.748c0-32.775-25.68-43.151-28.894-44.319l-32.208-12.915v-4.511c8.743-5.137 15.465-13.35 18.666-23.148 11.703-.94 20.943-10.743 20.943-22.682 0-7.1-3.267-13.447-8.373-17.627v-14.26C312.127 24.316 287.811 0 257.923 0h-3.844c-29.888 0-54.204 24.316-54.204 54.205v14.197c-5.153 4.179-8.458 10.553-8.458 17.691 0 12.028 9.379 21.884 21.206 22.696zm89.002-27.445c.293.092.594.163.9.221a6.582 6.582 0 0 1 1.808 4.528 6.592 6.592 0 0 1-2.708 5.321v-10.07zm-36.903 60.404l-8.904 9.244-8.366-8.148v-5.475a42.04 42.04 0 0 0 4.97.305h7.33c1.684 0 3.339-.111 4.97-.305v4.379zm20.735-45.947c0 14.174-11.531 25.703-25.703 25.703h-7.33c-14.174 0-25.706-11.531-25.706-25.703V74.6c10.469-1.137 28.961-4.817 43.238-16.714 3.202 5.475 8.143 11.386 15.502 14.848v23.067zm-69.414-41.596c0-20.974 17.063-38.037 38.036-38.037h3.844c20.973 0 38.036 17.063 38.036 38.037v5.106c-.137-.043-.279-.073-.419-.11-.069-.017-.136-.041-.205-.057-11.173-2.542-14.831-17.468-14.858-17.58a8.084 8.084 0 0 0-14.434-2.953c-14.542 20.104-46.978 20.331-47.383 20.331h-.026c-.278 0-.554.014-.825.042-.072.008-.143.024-.214.032a8.64 8.64 0 0 0-.587.089c-.101.022-.199.053-.3.078-.157.039-.318.073-.472.121-.066.021-.127.049-.192.07v-5.169zm-6.824 27.551a7.957 7.957 0 0 0 1.331-.324v10.169a6.605 6.605 0 0 1-2.965-5.508c0-1.66.618-3.175 1.634-4.337zM330.387 28.05c52.257 17.127 97.456 52.159 127.27 98.643a8.08 8.08 0 0 0 11.169 2.44 8.085 8.085 0 0 0 2.441-11.169c-31.818-49.608-80.061-86.996-135.844-105.279a8.085 8.085 0 0 0-5.036 15.365zM42.453 129.134a8.078 8.078 0 0 0 11.169-2.44c30.159-47.022 75.946-82.245 128.923-99.18a8.082 8.082 0 0 0 5.238-10.162c-1.36-4.253-5.912-6.599-10.161-5.238C121.069 30.19 72.197 67.783 40.011 117.964a8.088 8.088 0 0 0 2.442 11.17zM155.595 474.009c-41.808-19.218-77.069-49.899-101.972-88.725a8.085 8.085 0 0 0-13.61 8.728c26.575 41.434 64.208 74.175 108.829 94.688a8.058 8.058 0 0 0 3.372.742 8.087 8.087 0 0 0 3.381-15.433zM468.826 382.843a8.085 8.085 0 0 0-11.169 2.441c-24.545 38.271-59.235 68.684-100.317 87.951a8.084 8.084 0 0 0-3.886 10.752 8.083 8.083 0 0 0 10.752 3.886c43.847-20.563 80.868-53.018 107.063-93.86a8.087 8.087 0 0 0-2.443-11.17zM172.716 363.128V334.38c0-32.774-25.676-43.148-28.894-44.319l-32.208-12.916v-4.511c8.743-5.137 15.465-13.351 18.666-23.149 11.702-.94 20.943-10.743 20.943-22.682 0-7.099-3.267-13.446-8.374-17.627v-14.26c0-29.889-24.316-54.206-54.204-54.206h-3.844c-29.889 0-54.204 24.317-54.204 54.206v14.197c-5.153 4.18-8.458 10.553-8.458 17.69 0 12.028 9.379 21.884 21.204 22.696 3.204 9.791 9.923 18.001 18.663 23.135v4.463l-33.068 12.951C25.882 291.151.01 301.48.01 334.38v28.797c0 4.466 3.618 8.091 8.084 8.091h20.539a8.082 8.082 0 0 0 8.084-8.084 8.082 8.082 0 0 0-8.084-8.084H16.178v-20.721c0-22.369 17.487-28.854 18.165-29.095.125-.042.25-.087.373-.136l30.282-11.859 16.086 15.665a8.082 8.082 0 0 0 5.639 2.293l.128-.001a8.081 8.081 0 0 0 5.693-2.474l15.188-15.765 30.214 12.116c.143.058.222.088.369.137.744.265 18.232 6.751 18.232 29.119V355.1H54.321a8.082 8.082 0 0 0-8.084 8.084 8.082 8.082 0 0 0 8.084 8.084h110.311c4.465 0 8.084-3.676 8.084-8.14zm-40.368-141.074c.292.092.594.163.899.221a6.578 6.578 0 0 1 1.809 4.528 6.592 6.592 0 0 1-2.708 5.321v-10.07zm-91.075 10.257a6.605 6.605 0 0 1-2.965-5.508c0-1.66.62-3.175 1.635-4.337a8.044 8.044 0 0 0 1.33-.324v10.169zm8.109-32.658h-.026c-.278 0-.554.014-.825.042-.072.008-.143.024-.214.032a8.737 8.737 0 0 0-.587.089c-.101.022-.199.053-.3.078-.157.039-.318.073-.472.121-.066.02-.127.049-.192.07v-5.168c0-20.976 17.063-38.039 38.036-38.039h3.844c20.973 0 38.036 17.064 38.036 38.038v5.105c-.137-.043-.279-.073-.419-.11-.069-.017-.136-.042-.205-.057-11.173-2.542-14.831-17.466-14.858-17.579a8.081 8.081 0 0 0-6.264-6.134 8.075 8.075 0 0 0-8.169 3.182c-14.545 20.102-46.98 20.33-47.385 20.33zm46.063 82.805l-8.904 9.244-8.366-8.148v-5.475a42.04 42.04 0 0 0 4.97.305h7.33c1.684 0 3.339-.111 4.97-.305v4.379zm-4.969-20.243h-7.33c-14.174 0-25.706-11.531-25.706-25.704V215.31h.001c10.469-1.137 28.961-4.816 43.238-16.714 3.202 5.477 8.143 11.385 15.502 14.848v23.067c-.001 14.174-11.532 25.704-25.705 25.704zM483.096 290.06l-32.208-12.916v-4.511c8.743-5.137 15.465-13.351 18.666-23.149 11.702-.94 20.943-10.743 20.943-22.682 0-7.099-3.267-13.446-8.374-17.627v-14.26c0-29.889-24.316-54.206-54.204-54.206h-3.845c-29.888 0-54.204 24.317-54.204 54.206v14.197c-5.153 4.18-8.458 10.553-8.458 17.69 0 12.028 9.379 21.884 21.205 22.696 3.204 9.791 9.923 18.001 18.663 23.135v4.463l-33.067 12.951c-3.056 1.103-28.928 11.432-28.928 44.332v28.797c0 4.466 3.618 8.091 8.084 8.091h20.539a8.082 8.082 0 0 0 8.084-8.084 8.082 8.082 0 0 0-8.084-8.084h-12.456v-20.721c0-22.369 17.487-28.854 18.165-29.095.125-.042.249-.087.373-.136l30.282-11.859 16.086 15.665a8.082 8.082 0 0 0 5.64 2.293l.128-.001a8.08 8.08 0 0 0 5.693-2.474l15.188-15.765 30.214 12.116c.143.058.222.088.369.137.744.265 18.232 6.751 18.232 29.119v20.721H393.595a8.082 8.082 0 0 0-8.084 8.084 8.082 8.082 0 0 0 8.084 8.084h110.311c4.466 0 8.084-3.675 8.084-8.14v-28.748c-.001-32.774-25.677-43.148-28.894-44.319zm-11.474-68.006c.292.092.594.163.899.221a6.578 6.578 0 0 1 1.809 4.528 6.592 6.592 0 0 1-2.708 5.321v-10.07zm-91.075 10.257a6.605 6.605 0 0 1-2.965-5.508c0-1.66.62-3.175 1.635-4.337a8.044 8.044 0 0 0 1.33-.324v10.169zm8.109-32.658h-.026c-.278 0-.554.014-.825.042-.072.008-.143.024-.214.032a8.64 8.64 0 0 0-.587.089c-.101.022-.199.053-.3.078-.157.039-.318.073-.473.121-.065.02-.127.049-.192.07v-5.168c0-20.976 17.063-38.039 38.036-38.039h3.845c20.973 0 38.036 17.064 38.036 38.038v5.105c-.137-.043-.279-.073-.419-.11-.069-.017-.136-.042-.205-.057-11.173-2.542-14.831-17.466-14.858-17.579a8.081 8.081 0 0 0-6.264-6.134 8.076 8.076 0 0 0-8.169 3.182c-14.544 20.102-46.979 20.33-47.385 20.33zm46.063 82.805l-8.904 9.244-8.366-8.148v-5.475a42.04 42.04 0 0 0 4.97.305h7.33a42.04 42.04 0 0 0 4.97-.305v4.379zm-4.97-20.242h-7.33c-14.174 0-25.706-11.531-25.706-25.705V215.31h.001c10.472-1.14 28.974-4.827 43.238-16.714 3.202 5.477 8.143 11.385 15.502 14.848v23.067c0 14.175-11.531 25.705-25.705 25.705zM313.099 430.794l-32.208-12.916v-4.511c8.743-5.137 15.465-13.351 18.666-23.149 11.703-.94 20.943-10.744 20.943-22.683 0-7.099-3.267-13.446-8.373-17.627v-14.26c0-29.889-24.316-54.206-54.204-54.206h-3.844c-29.888 0-54.204 24.316-54.204 54.206v14.197c-5.153 4.18-8.458 10.553-8.458 17.69 0 12.028 9.379 21.884 21.204 22.696 3.204 9.792 9.923 18.001 18.663 23.136v4.463l-33.069 12.95c-3.056 1.103-28.928 11.433-28.928 44.332v28.797c0 4.466 3.618 8.091 8.084 8.091h20.539c4.466 0 8.084-3.618 8.084-8.084s-3.618-8.084-8.084-8.084h-12.456v-20.721c0-22.369 17.487-28.854 18.166-29.095.125-.042.25-.087.373-.136l30.282-11.86 16.086 15.665a8.082 8.082 0 0 0 5.639 2.293l.128-.001a8.077 8.077 0 0 0 5.693-2.474l15.188-15.765 30.214 12.116c.143.058.222.088.369.137.744.265 18.232 6.751 18.232 29.119v20.721H223.597c-4.466 0-8.084 3.618-8.084 8.084s3.618 8.084 8.084 8.084h110.311c4.464 0 8.084-3.675 8.084-8.14v-28.748c0-32.772-25.676-43.147-28.893-44.317zm-11.474-68.008c.293.092.594.163.899.221a6.578 6.578 0 0 1 1.809 4.528 6.594 6.594 0 0 1-2.708 5.322v-10.071zm-91.075 10.258a6.607 6.607 0 0 1-2.965-5.509c0-1.66.62-3.174 1.634-4.336a8.031 8.031 0 0 0 1.331-.324v10.169zm8.108-32.661h-.026c-.278 0-.554.014-.825.042-.085.009-.167.026-.252.038-.183.024-.369.047-.549.084-.127.025-.249.064-.375.096-.133.033-.268.063-.398.102-.066.019-.127.048-.193.069v-5.168c.001-20.973 17.065-38.036 38.037-38.036h3.844c20.973 0 38.036 17.063 38.036 38.038v5.105c-.13-.041-.266-.069-.4-.105-.075-.021-.148-.045-.224-.064-11.173-2.541-14.831-17.465-14.858-17.579a8.081 8.081 0 0 0-6.264-6.134 8.077 8.077 0 0 0-8.169 3.181c-14.543 20.104-46.978 20.331-47.384 20.331zm46.064 82.807l-8.904 9.245-8.366-8.148v-5.475a42.04 42.04 0 0 0 4.97.305h7.33c1.684 0 3.339-.112 4.97-.305v4.378zm-4.969-20.242h-7.33c-14.174 0-25.706-11.531-25.706-25.704v-21.2h.001c10.469-1.138 28.961-4.817 43.238-16.715 3.202 5.475 8.143 11.386 15.502 14.848v23.067c-.001 14.172-11.532 25.704-25.705 25.704z" data-original="#000000" class="active-path" data-old_color="#E4CDCD" fill="#F7F0F0"/></symbol><symbol id="deal" viewBox="0 0 479.896 479.896"><path d="M437.576 260.212l-88-88a7.991 7.991 0 0 0-11.312 0l-47.304 47.304-37.232 22.36h-29.784c-.896 0-1.776.184-2.608.472l-40.96-15.36-46.768-46.768a7.991 7.991 0 0 0-11.312 0l-80 80a7.984 7.984 0 0 0-.008 11.312l47.608 47.608 19.504 26.008c-9.128 9.376-9.08 24.416.2 33.696l12.688 12.688 24 24 24 24 12.68 12.688c4.536 4.528 10.56 7.032 16.976 7.032s12.44-2.496 16.968-7.032l7.032-7.032 23.024 23.032c4.536 4.528 10.56 7.032 16.976 7.032s12.44-2.496 16.968-7.032l1.376-1.376c4.352-4.36 6.592-10 6.888-15.712 5.936-.304 11.496-2.68 15.728-6.912l1.376-1.376c4.352-4.36 6.592-10 6.888-15.712 5.936-.304 11.496-2.68 15.728-6.912l1.376-1.376c4.352-4.36 6.592-10 6.888-15.712 5.936-.304 11.496-2.68 15.728-6.912l1.376-1.376c7.528-7.536 8.888-18.824 4.296-27.84l31.6-48.064 47.416-47.416a7.991 7.991 0 0 0 0-11.312zm-378.32 5.664l68.688-68.688 36.688 36.688-68.688 68.688-36.688-36.688zm61.664 101.656c-3.12-3.12-3.12-8.192 0-11.312l9.376-9.376c3.016-3.032 8.288-3.032 11.312 0l1.368 1.376c3.12 3.12 3.12 8.192 0 11.312l-15.032 15.032-7.024-7.032zm18.336 18.344l15.032-15.032c3.016-3.032 8.288-3.032 11.312 0l1.368 1.376c3.12 3.12 3.12 8.192 0 11.312l-15.024 15.032-12.688-12.688zm36.688 36.688l-12.688-12.688 15.032-15.032c3.016-3.032 8.288-3.032 11.312 0l1.368 1.376c3.12 3.12 3.12 8.192 0 11.312l-15.024 15.032zm39.032 8.968l-9.376 9.376c-3.016 3.032-8.288 3.032-11.312 0l-7.032-7.032 15.032-15.032c3.016-3.032 8.288-3.032 11.312 0l1.368 1.376c3.12 3.12 3.12 8.192.008 11.312zm127.992-48l-1.376 1.376c-3.016 3.032-8.288 3.032-11.312 0l-20.688-20.688-11.312 11.312 20.68 20.688c3.12 3.12 3.12 8.192 0 11.312l-1.376 1.376c-3.016 3.032-8.288 3.032-11.312 0l-20.688-20.688-11.312 11.312 20.68 20.688c3.12 3.12 3.12 8.192 0 11.312l-1.376 1.376c-3.016 3.032-8.288 3.032-11.312 0l-20.688-20.688-11.312 11.312 20.68 20.688c3.12 3.12 3.12 8.192 0 11.312l-1.376 1.376c-3.016 3.032-8.288 3.032-11.312 0L232.6 431.252c1.784-7.792-.288-16.288-6.344-22.344l-1.368-1.376c-4.224-4.224-9.928-6.392-15.712-6.68-.248-5.8-2.504-11.528-6.92-15.944l-1.368-1.376c-4.224-4.224-9.928-6.392-15.712-6.68-.248-5.8-2.504-11.528-6.92-15.944l-1.368-1.376c-4.224-4.224-9.928-6.392-15.712-6.68-.248-5.8-2.504-11.528-6.92-15.944l-1.368-1.376c-8.456-8.448-22.696-8.92-31.944-1.608l-14.464-19.296 71.456-71.456 29.04 10.888-38.048 33.32c-.048.04-.08.096-.12.136a27.798 27.798 0 0 0-3.856 4.224c-.472.632-.832 1.312-1.248 1.976-.6.96-1.184 1.912-1.656 2.92-.416.872-.736 1.76-1.056 2.664a28.974 28.974 0 0 0-.808 2.696 25.73 25.73 0 0 0-.576 2.936c-.136.992-.168 1.984-.2 2.984-.024.712-.176 1.392-.144 2.112.008.224.088.432.104.656.12 1.856.392 3.696.88 5.512.128.472.36.904.512 1.376.464 1.432 1.008 2.848 1.704 4.208.304.584.68 1.12 1.024 1.68.48.792.872 1.616 1.44 2.368.264.352.6.616.88.952.504.616 1.056 1.176 1.608 1.752a27.696 27.696 0 0 0 2.68 2.448c.392.312.688.704 1.096 1 .544.4 1.152.688 1.72 1.04.272.168.544.344.824.496 4.696 2.68 10 3.888 15.336 3.576.888-.04 1.744-.184 2.616-.312.68-.104 1.36-.208 2.04-.36a28.4 28.4 0 0 0 3.224-.912c.472-.16.928-.36 1.392-.544 1.064-.44 2.12-.888 3.136-1.456.8-.44 1.544-.984 2.312-1.496.536-.376 1.12-.648 1.632-1.056l.352-.28 22.08-17.672 21.384-7.128h19.808l45.24 37.656 28.68 28.688c3.12 3.12 3.12 8.192 0 11.312zm4.776-29.16L333.6 340.22l-.016.016-8.52-8.504-48-40a7.99 7.99 0 0 0-5.12-1.856h-24c-.856 0-1.712.144-2.528.416l-24 8a8.143 8.143 0 0 0-2.472 1.336l-23.192 18.56a13.6 13.6 0 0 1-7.608 2.952c-.08 0-.168-.008-.248-.008-1.008.04-2-.104-2.968-.304-.4-.088-.816-.144-1.2-.272a10.544 10.544 0 0 1-2.656-1.272c-.384-.24-.744-.52-1.104-.8-.384-.32-.768-.648-1.104-1-.248-.256-.496-.512-.728-.792-.232-.28-.424-.592-.632-.888a12.347 12.347 0 0 1-2.168-7.976c.016-.184.016-.376.04-.56.168-1.36.552-2.688 1.16-3.928.08-.168.192-.328.28-.496.68-1.248 1.528-2.424 2.656-3.408l47.48-41.56h28.992a7.978 7.978 0 0 0 4.12-1.144l34.64-20.784 78.976 78.976-25.936 39.448zm36.2-51.808l-76.688-76.688 36.688-36.688 76.688 76.688-36.688 36.688z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FCFAFA"/><path d="M333.6 20.22c-20.768-20.768-54.544-20.768-75.312 0l-18.344 18.344L221.6 20.22c-20.768-20.768-54.544-20.768-75.312 0s-20.768 54.544 0 75.312l88 88a7.978 7.978 0 0 0 5.656 2.344 7.978 7.978 0 0 0 5.656-2.344l88-88c20.768-20.768 20.768-54.544 0-75.312zm-11.312 64l-82.344 82.344L157.6 84.22c-14.52-14.52-14.52-38.168 0-52.688 7.264-7.264 16.808-10.888 26.344-10.888s19.08 3.624 26.344 10.888l24 24a7.991 7.991 0 0 0 11.312 0l24-24c14.52-14.528 38.168-14.528 52.688 0 14.52 14.52 14.52 38.168 0 52.688zM29.864 125.74a240.84 240.84 0 0 0-7.512 14.752l14.496 6.768a221.946 221.946 0 0 1 7.008-13.752l-13.992-7.768zM47.848 97.98a237.912 237.912 0 0 0-9.472 13.576l13.432 8.688a229.488 229.488 0 0 1 8.832-12.656L47.848 97.98zM6.176 187.348a232.403 232.403 0 0 0-3.192 16.256l15.8 2.528a225.471 225.471 0 0 1 2.976-15.16l-15.584-3.624zM15.872 155.732a240.617 240.617 0 0 0-5.4 15.648l15.296 4.688c1.504-4.904 3.2-9.824 5.04-14.6l-14.936-5.736zM39.216 341.396l-14.336 7.112c2.432 4.896 5.08 9.8 7.864 14.56l13.808-8.096c-2.6-4.44-5.072-9.008-7.336-13.576zM94.288 51.108a240.574 240.574 0 0 0-12.792 10.496l10.576 12a227.41 227.41 0 0 1 11.936-9.8l-9.72-12.696zM69.472 72.956a236.287 236.287 0 0 0-11.24 12.136l12.112 10.456A229.439 229.439 0 0 1 80.832 84.22l-11.36-11.264zM.92 220.036c-.488 5.48-.8 11.032-.92 16.512l16 .344c.112-5.112.4-10.296.856-15.432L.92 220.036zM19.72 283.004l-15.736 2.904a237.788 237.788 0 0 0 3.576 16.168l15.496-4a219.029 219.029 0 0 1-3.336-15.072zM16.192 252.332l-15.984.728c.248 5.472.688 11.016 1.32 16.496l15.896-1.832c-.592-5.12-1-10.296-1.232-15.392zM27.432 312.876l-15.176 5.064a237.81 237.81 0 0 0 5.784 15.504l14.784-6.104a219.811 219.811 0 0 1-5.392-14.464zM73.92 392.268L62.08 403.02a237.603 237.603 0 0 0 11.52 11.856l11.08-11.528a231.24 231.24 0 0 1-10.76-11.08zM148.392 446.364l-6.56 14.592a232.22 232.22 0 0 0 15.336 6.248l5.512-15.008a215.485 215.485 0 0 1-14.288-5.832zM96.176 413.668l-10.264 12.264a246.508 246.508 0 0 0 13.032 10.176l9.416-12.936a233.463 233.463 0 0 1-12.184-9.504zM121.152 431.82l-8.496 13.544a229.404 229.404 0 0 0 14.328 8.304l7.528-14.112c-4.504-2.4-8.992-5-13.36-7.736zM54.808 368.02l-13.216 9.024a240.11 240.11 0 0 0 9.8 13.344l12.552-9.928a218.816 218.816 0 0 1-9.136-12.44zM383.2 414.076a232.754 232.754 0 0 1-12.2 9.472l9.376 12.968c4.432-3.2 8.832-6.616 13.064-10.144l-10.24-12.296zM386.168 51.556L376.4 64.228a236.316 236.316 0 0 1 11.92 9.84l10.6-11.984a241.824 241.824 0 0 0-12.752-10.528zM405.52 392.74a220.333 220.333 0 0 1-10.784 11.04l11.048 11.576a241.613 241.613 0 0 0 11.56-11.832L405.52 392.74zM424.712 368.556a233.409 233.409 0 0 1-9.184 12.432l12.536 9.936a246.569 246.569 0 0 0 9.832-13.304l-13.184-9.064zM330.92 446.628a224.555 224.555 0 0 1-14.304 5.784l5.472 15.032a227.743 227.743 0 0 0 15.344-6.2l-6.512-14.616zM358.184 432.156a224.953 224.953 0 0 1-13.376 7.696l7.496 14.144a232.408 232.408 0 0 0 14.336-8.256l-8.456-13.584zM432.472 98.556l-12.832 9.56a234.127 234.127 0 0 1 8.808 12.696l13.448-8.672a248.787 248.787 0 0 0-9.424-13.584zM464.256 156.364l-14.944 5.704a223.896 223.896 0 0 1 4.992 14.6l15.312-4.656a240.138 240.138 0 0 0-5.36-15.648zM440.392 341.956a219.205 219.205 0 0 1-7.384 13.56l13.784 8.144a240.221 240.221 0 0 0 7.912-14.544l-14.312-7.16zM450.368 126.364l-14.024 7.704a224.808 224.808 0 0 1 6.976 13.784l14.512-6.736a242.773 242.773 0 0 0-7.464-14.752zM410.936 73.468l-11.4 11.232a223.54 223.54 0 0 1 10.456 11.368l12.144-10.424a244.64 244.64 0 0 0-11.2-12.176zM479.016 220.684l-15.936 1.392c.448 5.104.72 10.288.816 15.416l16-.296a241.44 241.44 0 0 0-.88-16.512zM473.88 188.004l-15.6 3.576a224.265 224.265 0 0 1 2.928 15.16l15.808-2.488a235.7 235.7 0 0 0-3.136-16.248zM452.264 313.468a231.72 231.72 0 0 1-5.44 14.464l14.776 6.144a250.87 250.87 0 0 0 5.824-15.496l-15.16-5.112zM463.672 252.948a229.582 229.582 0 0 1-1.272 15.4l15.888 1.856a239.714 239.714 0 0 0 1.368-16.472l-15.984-.784zM460.064 283.596a219.707 219.707 0 0 1-3.384 15.064l15.488 4.048a243.005 243.005 0 0 0 3.624-16.144l-15.728-2.968z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FCFAFA"/></symbol><symbol id="facebook" viewBox="0 0 310 310"><path d="M81.703 165.106h33.981V305a5 5 0 0 0 5 5H178.3a5 5 0 0 0 5-5V165.765h39.064a5 5 0 0 0 4.967-4.429l5.933-51.502a5 5 0 0 0-4.966-5.572h-44.996V71.978c0-9.732 5.24-14.667 15.576-14.667h29.42a5 5 0 0 0 5-5V5.037a5 5 0 0 0-5-5h-40.545A39.746 39.746 0 0 0 185.896 0c-7.035 0-31.488 1.381-50.804 19.151-21.402 19.692-18.427 43.27-17.716 47.358v37.752H81.703a5 5 0 0 0-5 5v50.844a5 5 0 0 0 5 5.001z" fill="#FFF"/></symbol><symbol id="instagram" viewBox="0 0 300 300"><path d="M38.52.012h222.978C282.682.012 300 17.336 300 38.52v222.978c0 21.178-17.318 38.49-38.502 38.49H38.52c-21.184 0-38.52-17.313-38.52-38.49V38.52C0 17.336 17.336.012 38.52.012zm180.026 33.317c-7.438 0-13.505 6.091-13.505 13.525v32.314c0 7.437 6.067 13.514 13.505 13.514h33.903c7.426 0 13.506-6.077 13.506-13.514V46.854c0-7.434-6.08-13.525-13.506-13.525h-33.903zm47.538 93.539h-26.396a87.715 87.715 0 0 1 3.86 25.759c0 49.882-41.766 90.34-93.266 90.34-51.487 0-93.254-40.458-93.254-90.34 0-8.963 1.37-17.584 3.861-25.759H33.35V253.6c0 6.563 5.359 11.902 11.916 11.902h208.907c6.563 0 11.911-5.339 11.911-11.902V126.868zm-115.801-35.89c-33.26 0-60.24 26.128-60.24 58.388 0 32.227 26.98 58.375 60.24 58.375 33.278 0 60.259-26.148 60.259-58.375 0-32.261-26.981-58.388-60.259-58.388z" fill="#FFF"/></symbol><symbol id="maps-and-flags" viewBox="0 0 512 512"><path d="M256 0C153.755 0 70.573 83.182 70.573 185.426c0 126.888 165.939 313.167 173.004 321.035 6.636 7.391 18.222 7.378 24.846 0 7.065-7.868 173.004-194.147 173.004-321.035C441.425 83.182 358.244 0 256 0zm0 278.719c-51.442 0-93.292-41.851-93.292-93.293S204.559 92.134 256 92.134s93.291 41.851 93.291 93.293-41.85 93.292-93.291 93.292z" data-original="#000000" class="active-path" data-old_color="#FDFCFC" fill="#FFF"/></symbol><symbol id="phone-receiver" viewBox="0 0 578.106 578.106"><path d="M577.83 456.128c1.225 9.385-1.635 17.545-8.568 24.48l-81.396 80.781c-3.672 4.08-8.465 7.551-14.381 10.404-5.916 2.857-11.729 4.693-17.439 5.508-.408 0-1.635.105-3.676.309-2.037.203-4.689.307-7.953.307-7.754 0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584c-25.096-10.404-53.553-26.012-85.376-46.818-31.823-20.805-65.688-49.367-101.592-85.68-28.56-28.152-52.224-55.08-70.992-80.783-18.768-25.705-33.864-49.471-45.288-71.299-11.425-21.828-19.993-41.616-25.705-59.364S4.59 177.362 2.55 164.51-.306 141.56.102 134.216c.408-7.344.612-11.424.612-12.24.816-5.712 2.652-11.526 5.508-17.442s6.324-10.71 10.404-14.382L98.022 8.756c5.712-5.712 12.24-8.568 19.584-8.568 5.304 0 9.996 1.53 14.076 4.59s7.548 6.834 10.404 11.322l65.484 124.236c3.672 6.528 4.692 13.668 3.06 21.42-1.632 7.752-5.1 14.28-10.404 19.584l-29.988 29.988c-.816.816-1.53 2.142-2.142 3.978s-.918 3.366-.918 4.59c1.632 8.568 5.304 18.36 11.016 29.376 4.896 9.792 12.444 21.726 22.644 35.802s24.684 30.293 43.452 48.653c18.36 18.77 34.68 33.354 48.96 43.76 14.277 10.4 26.215 18.053 35.803 22.949 9.588 4.896 16.932 7.854 22.031 8.871l7.648 1.531c.816 0 2.145-.307 3.979-.918 1.836-.613 3.162-1.326 3.979-2.143l34.883-35.496c7.348-6.527 15.912-9.791 25.705-9.791 6.938 0 12.443 1.223 16.523 3.672h.611l118.115 69.768c8.571 5.308 13.67 12.038 15.303 20.198z" data-original="#010002" class="active-path" data-old_color="#FBFBFD" fill="#FFF"/></symbol><symbol id="skype" viewBox="0 0 300 300"><path d="M289.391 181.848a141.574 141.574 0 0 0 3.268-30.273c0-77.917-63.166-141.084-141.086-141.084-8.226 0-16.286.711-24.128 2.064C114.836 4.611 99.918 0 83.916 0 38.728 0 2.097 36.635 2.097 81.816a81.415 81.415 0 0 0 11.246 41.385 141.74 141.74 0 0 0-2.854 28.373c0 77.917 63.165 141.084 141.084 141.084 8.826 0 17.459-.817 25.834-2.367 11.518 6.19 24.688 9.709 38.678 9.709 45.189 0 81.818-36.631 81.818-81.816a81.432 81.432 0 0 0-8.512-36.336zm-65.459 37.15c-6.527 9.236-16.17 16.555-28.664 21.749-12.373 5.143-27.205 7.751-44.088 7.751-20.264 0-37.253-3.564-50.513-10.598-9.479-5.121-17.296-12.056-23.229-20.613-5.993-8.645-9.033-17.223-9.033-25.494 0-5.17 1.98-9.652 5.886-13.32 3.865-3.636 8.818-5.478 14.724-5.478 4.848 0 9.029 1.456 12.429 4.328 3.247 2.752 6.034 6.824 8.273 12.083 2.5 5.726 5.226 10.561 8.105 14.369 2.767 3.663 6.748 6.742 11.832 9.145 5.115 2.422 12.01 3.649 20.491 3.649 11.663 0 21.226-2.49 28.419-7.402 7.025-4.797 10.441-10.555 10.441-17.604 0-5.57-1.783-9.947-5.449-13.382-3.84-3.591-8.904-6.386-15.055-8.303-6.412-1.999-15.117-4.155-25.884-6.409-14.586-3.124-26.985-6.83-36.86-11.019a2.805 2.805 0 0 1-.115-.048c-10.117-4.303-18.271-10.27-24.236-17.736-6.059-7.582-9.129-17.094-9.129-28.275 0-10.658 3.223-20.265 9.58-28.552 6.309-8.229 15.523-14.624 27.385-19.012 11.709-4.33 25.637-6.524 41.396-6.524 12.6 0 23.678 1.455 32.924 4.33 9.299 2.896 17.139 6.807 23.299 11.619 6.205 4.848 10.82 10.035 13.719 15.422 2.928 5.441 4.412 10.856 4.412 16.094 0 5.041-1.947 9.622-5.787 13.615-3.863 4.016-8.738 6.055-14.49 6.055-5.225 0-9.314-1.275-12.152-3.789-2.641-2.334-5.379-5.973-8.42-11.209-3.518-6.684-7.775-11.953-12.66-15.666-4.74-3.606-12.666-5.437-23.555-5.437-10.113 0-18.338 2.03-24.445 6.034-5.885 3.858-8.744 8.282-8.744 13.523 0 3.215.92 5.901 2.813 8.213 2.005 2.449 4.833 4.6 8.408 6.388 3.708 1.864 7.529 3.345 11.357 4.402 3.921 1.088 10.5 2.7 19.522 4.784 9.506 2.041 18.359 4.289 26.418 6.695a258.5 258.5 0 0 1 4.771 1.468c9.395 3.007 17.514 6.716 24.135 11.022 6.758 4.401 12.109 10.053 15.906 16.8 3.807 6.771 5.736 15.132 5.736 24.844-.002 11.625-3.324 22.217-9.873 31.488z" fill="#FFF"/></symbol><symbol id="team-icon" viewBox="0 0 512 512"><path d="M454.889 430.401l-8.412-3.373C488.78 379.97 512 319.526 512 256c0-51.971-15.712-101.977-44.339-144.014a8.01 8.01 0 0 0-1.277-1.835 256.711 256.711 0 0 0-44.602-49.226 8.085 8.085 0 0 0-10.476 12.316 240.732 240.732 0 0 1 36.589 38.902c-17.112 6.688-37.652 12.352-60.582 16.827-6.33-18.86-14.11-36.444-23.256-52.309-12.327-21.385-26.506-38.605-41.959-51.27 24.051 6.876 46.962 17.53 67.987 31.733a8.084 8.084 0 0 0 9.05-13.398C356.796 15.12 307.3 0 256 0 187.619 0 123.333 26.628 74.982 74.982 26.628 123.333 0 187.621 0 256c0 63.608 23.252 124.06 65.624 171.135l-8.306 3.253c-3.059 1.105-29.07 11.48-29.07 44.553v28.967c0 4.466 3.618 8.092 8.084 8.092h118.994c.39 0 .771-.037 1.146-.091.376.054.756.091 1.146.091h32.894a8.082 8.082 0 0 0 8.084-8.084 8.083 8.083 0 0 0-8.084-8.084h-24.81v-28.155c0-29.704 23.332-38.248 24.274-38.58.125-.042.249-.087.373-.136l39.368-15.418c.085.092.165.188.255.276l20.922 20.378a8.093 8.093 0 0 0 5.641 2.293l.127-.001a8.074 8.074 0 0 0 5.693-2.474l20.089-20.844 39.315 15.766c.143.058.237.094.383.142.993.349 24.328 8.896 24.328 38.598v28.155H215.778a8.083 8.083 0 0 0-8.084 8.084 8.083 8.083 0 0 0 8.084 8.084h260.061c4.466 0 8.084-3.676 8.084-8.141v-28.918c.002-32.946-25.813-43.369-29.034-44.54zm-24.461-9.809l-7.969-3.196v-4.6c8.807-5.165 15.576-13.438 18.792-23.306 11.761-.929 21.051-10.776 21.051-22.771 0-7.134-3.288-13.51-8.423-17.708v-14.368c0-27.702-20.788-50.625-47.58-54.027.305-5.481.516-11.003.618-16.532h88.765c-1.943 58.517-24.929 113.79-65.254 156.508zm-29.186-18.199h-7.373c-14.285 0-25.906-11.621-25.906-25.904v-21.39c10.531-1.143 29.184-4.824 43.555-16.826 3.219 5.521 8.2 11.492 15.63 14.979v23.236c-.001 14.284-11.622 25.905-25.906 25.905zm5.05 15.854v4.482l-9.008 9.346-8.464-8.243v-5.586c1.657.199 3.34.314 5.05.314h7.373c1.71.001 3.391-.114 5.049-.313zm-46.387-78.791h-.027a8.33 8.33 0 0 0-.825.042c-.087.009-.172.027-.259.039-.182.024-.364.046-.542.083-.122.024-.239.061-.359.092-.139.035-.279.065-.414.107-.088.027-.171.064-.258.094v-5.269c0-21.126 17.187-38.312 38.313-38.312h3.866c21.125 0 38.309 17.186 38.309 38.312v5.203c-.152-.049-.306-.087-.462-.126-.074-.021-.148-.045-.223-.064-11.27-2.563-14.956-17.604-14.983-17.718a8.081 8.081 0 0 0-6.265-6.134 8.08 8.08 0 0 0-8.17 3.182c-14.639 20.237-47.273 20.469-47.701 20.469zm83.41 32.711v-10.894c1.702 1.215 2.818 3.202 2.818 5.448s-1.116 4.231-2.818 5.446zm14.068-246.419c23.417 36.176 36.826 78.29 38.297 122.167h-88.767c-.656-36.389-5.741-71.486-14.808-103.449 24.855-4.937 47.016-11.246 65.278-18.718zm-66.64 122.169h-82.766c-11.029-12.192-26.533-20.247-43.893-21.587v-69.52c39.671-.395 77.954-3.694 112.062-9.427 8.925 30.912 13.934 65.046 14.597 100.534zm-71.313 84.418c0 4.755-3.212 8.764-7.579 9.997v-19.997c4.367 1.235 7.579 5.245 7.579 10zM264.084 16.617c32.171 3.436 62.439 27.306 85.965 68.118 8.256 14.321 15.345 30.143 21.189 47.115-32.594 5.337-69.173 8.409-107.155 8.79V16.617zm-5.127 225.663c27.537 0 49.939 22.404 49.939 49.942v9.879c-.054-.043-.111-.081-.166-.124a7.256 7.256 0 0 0-.359-.267c-.095-.066-.193-.127-.291-.189a7.167 7.167 0 0 0-.367-.223c-.115-.065-.234-.122-.352-.181-.113-.056-.225-.113-.341-.165-.142-.063-.289-.115-.434-.17-.101-.038-.201-.077-.303-.111-.163-.054-.331-.097-.498-.14-.074-.021-.147-.046-.223-.064-15.357-3.492-20.222-23.515-20.263-23.689a8.081 8.081 0 0 0-6.265-6.134 8.077 8.077 0 0 0-8.17 3.182c-18.931 26.172-60.75 26.44-61.302 26.44h-.031c-.278 0-.554.014-.825.041-.085.01-.167.027-.252.039-.183.025-.369.047-.549.083-.115.024-.227.06-.342.088-.144.036-.291.068-.431.111-.131.041-.257.094-.385.141-.117.043-.239.081-.355.129-.148.063-.289.137-.43.206-.092.045-.185.084-.275.133-.146.078-.282.168-.422.254-.08.051-.164.096-.244.149-.13.088-.253.186-.379.282-.081.061-.165.117-.244.182-.074.061-.143.13-.216.194v-10.077c0-27.538 22.402-49.941 49.939-49.941h4.836zm-137.7 5.636c.663-35.494 5.674-69.635 14.601-100.55 34.156 5.741 72.48 9.047 112.058 9.445v69.602c-16.947 1.587-32.054 9.589-42.859 21.557a8.275 8.275 0 0 0-.896-.053h-82.904zm80.19 74.336v20.166c-4.533-1.121-7.906-5.209-7.906-10.083-.001-4.873 3.373-8.961 7.906-10.083zm46.469-305.635V140.64c-37.892-.384-74.5-3.468-107.146-8.815 5.843-16.962 12.929-32.774 21.181-47.09 23.526-40.812 53.794-64.682 85.965-68.118zm-58.103 8.845c-15.418 12.66-29.567 29.853-41.871 51.198-9.143 15.861-16.92 33.437-23.249 52.292-22.901-4.469-43.408-10.12-60.488-16.782 30.962-41.185 74.862-72.116 125.608-86.708zM54.69 125.786c18.216 7.444 40.381 13.729 65.212 18.661-9.073 31.967-14.158 67.072-14.816 103.469H16.32c1.495-44.906 15.39-86.723 38.37-122.13zm52.093 292.462c1.657.199 3.34.313 5.05.313h7.374c1.708 0 3.391-.114 5.047-.314v4.481l-9.006 9.346-8.465-8.243v-5.583zm12.424-15.855h-7.374c-14.285 0-25.906-11.621-25.906-25.905v-21.38c10.529-1.139 29.175-4.826 43.555-16.835 3.22 5.522 8.2 11.494 15.629 14.981v23.235c-.001 14.283-11.621 25.904-25.904 25.904zm20.801-80.455a8.081 8.081 0 0 0-6.265-6.134 8.077 8.077 0 0 0-8.169 3.182c-14.65 20.249-47.31 20.471-47.704 20.471h-.027c-.278 0-.554.014-.825.041-.085.01-.167.027-.252.039-.183.024-.369.047-.549.083-.115.024-.227.06-.342.088-.144.036-.29.068-.431.111-.087.027-.169.064-.255.094v-5.269c0-21.126 17.186-38.313 38.312-38.313h3.867c21.125 0 38.309 17.187 38.309 38.313v5.204h-.002c-.155-.051-.316-.089-.474-.13-.071-.018-.14-.043-.212-.06-11.268-2.563-14.954-17.607-14.981-17.72zM16.319 264.084h88.765c.101 5.568.316 11.129.623 16.645-26.361 3.791-46.689 26.519-46.689 53.914v14.305c-5.185 4.196-8.51 10.6-8.51 17.771 0 12.084 9.433 21.983 21.32 22.785 3.216 9.862 9.982 18.128 18.786 23.292v4.553l-8.831 3.458c-40.461-42.751-63.52-98.08-65.464-156.723zm53.438 97.009v11.252a6.688 6.688 0 0 1-3.081-5.624 6.695 6.695 0 0 1 3.081-5.628zm79.775 106.585v28.154H44.417v-20.891c0-22.539 17.62-29.071 18.305-29.314.125-.042.25-.087.373-.136l30.491-11.941 16.202 15.78a8.082 8.082 0 0 0 5.64 2.293l.128-.001a8.071 8.071 0 0 0 5.692-2.474l15.304-15.882 18.917 7.585c-3.587 7.341-5.937 16.232-5.937 26.827zm77.998-70.642l-42.908 16.803c-5.464 1.88-13.026 6.217-19.734 13.369l-24.467-9.812v-4.598c8.809-5.166 15.577-13.439 18.793-23.308 11.762-.929 21.053-10.776 21.053-22.771 0-7.134-3.289-13.51-8.424-17.708v-14.368c0-28.519-22.03-51.974-49.963-54.279a427.6 427.6 0 0 1-.624-16.281h73.06a65.693 65.693 0 0 0-6.304 28.137v18.864c-6.457 4.851-10.642 12.57-10.642 21.251 0 14.51 11.697 26.334 26.157 26.556 3.794 12.814 12.533 23.52 24.001 29.899v8.246zm-66.251-24.868V361.27c1.703 1.216 2.82 3.203 2.82 5.45s-1.117 4.233-2.82 5.448zm108.322 30.51v.52l-13.246 13.745-12.657-12.328v-10.172c2.715.453 5.499.7 8.342.7h9.222c2.841 0 5.624-.247 8.339-.698v8.233zm-8.339-23.702h-9.222c-18.982 0-34.425-15.442-34.425-34.424V316.01c12.902-1.188 38.414-5.673 57.049-22.402 3.933 7.443 10.526 16.084 21.02 20.566v30.377c-.001 18.983-15.442 34.425-34.422 34.425zm86.072 48.287c-6.707-7.17-14.278-11.522-19.754-13.412l-41.812-16.769v-8.292c11.471-6.38 20.208-17.089 24.001-29.907 14.307-.396 25.827-12.149 25.827-26.547 0-8.631-4.14-16.311-10.534-21.167v-18.948a65.682 65.682 0 0 0-6.304-28.137h71.983a427.46 427.46 0 0 1-.631 16.351c-27.506 2.729-49.06 25.998-49.06 54.208v14.307c-5.184 4.195-8.508 10.599-8.508 17.77 0 12.085 9.433 21.984 21.32 22.785 3.216 9.862 9.983 18.128 18.787 23.292v4.553l-25.315 9.913zm4.461-66.17v11.252a6.686 6.686 0 0 1-3.081-5.624 6.694 6.694 0 0 1 3.081-5.628zm115.962 134.739H362.641v-28.155c0-10.552-2.329-19.413-5.893-26.736l18.876-7.392 16.2 15.78a8.084 8.084 0 0 0 5.641 2.294l.127-.001a8.076 8.076 0 0 0 5.693-2.474l15.305-15.882 30.426 12.2c.142.058.221.088.368.138.75.266 18.374 6.799 18.374 29.338v20.89z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFAFA"/></symbol><symbol id="vegetarian" viewBox="0 0 480 480"><path d="M424 47.999c-30.88 0-56 32.296-56 72 0 27.904 12.672 53.288 32 65.048v222.952c0 13.232 10.768 24 24 24s24-10.768 24-24V185.047c19.328-11.76 32-37.144 32-65.048 0-39.704-25.12-72-56-72zm12.584 125.048a7.992 7.992 0 0 0-4.584 7.232v227.72c0 4.416-3.592 8-8 8-4.408 0-8-3.584-8-8v-227.72a7.992 7.992 0 0 0-4.584-7.232c-16.4-7.744-27.416-29.064-27.416-53.048 0-30.872 17.944-56 40-56s40 25.128 40 56c0 23.984-11.016 45.304-27.416 53.048zM88 47.999a23.896 23.896 0 0 0-16 6.128c-4.248-3.808-9.856-6.128-16-6.128s-11.752 2.32-16 6.128a23.896 23.896 0 0 0-16-6.128c-13.232 0-24 10.768-24 24v80c0 13.232 10.768 24 24 24h8v232c0 13.232 10.768 24 24 24s24-10.768 24-24v-232h8c13.232 0 24-10.768 24-24v-80c0-13.232-10.768-24-24-24zm8 104c0 4.416-3.592 8-8 8H72c-4.416 0-8 3.576-8 8v240c0 4.416-3.592 8-8 8s-8-3.584-8-8v-240c0-4.424-3.584-8-8-8H24c-4.408 0-8-3.584-8-8v-80c0-4.416 3.592-8 8-8s8 3.584 8 8v48c0 4.424 3.584 8 8 8s8-3.576 8-8v-48c0-4.416 3.592-8 8-8s8 3.584 8 8v48c0 4.424 3.584 8 8 8s8-3.576 8-8v-48c0-4.416 3.592-8 8-8s8 3.584 8 8v80zM344.424 296.471c-2.24-.232-55.24-5.536-85.704 24.928-4.248 4.248-7.744 8.968-10.712 13.896v-47.344c1.304.04 2.752.064 4.336.064 17.736 0 52-3.176 74.256-25.432 30.472-30.48 25.168-83.472 24.92-85.704a7.993 7.993 0 0 0-7.096-7.104c-2.24-.232-55.232-5.544-85.704 24.92-4.248 4.256-7.744 8.968-10.712 13.896v-20.952c9.744-8.704 40-38.696 40-75.656 0-43.096-41.224-76.816-42.984-78.224a8.004 8.004 0 0 0-10.04 0C233.224 35.183 192 68.903 192 111.999c0 36.96 30.256 66.952 40 75.656v20.952c-2.968-4.928-6.464-9.648-10.712-13.896-30.472-30.48-83.472-25.16-85.704-24.92a7.993 7.993 0 0 0-7.096 7.104c-.24 2.232-5.552 55.224 24.92 85.704 22.256 22.256 56.52 25.432 74.256 25.432 1.592 0 3.032-.024 4.336-.064v47.344c-2.968-4.928-6.464-9.64-10.712-13.896-30.472-30.48-83.464-25.16-85.704-24.928a7.993 7.993 0 0 0-7.096 7.104c-.24 2.232-5.552 55.224 24.92 85.712 22.248 22.248 56.496 25.424 74.24 25.424 1.6 0 3.048-.024 4.36-.064v33.336h16v-33.36c1.312.04 2.76.064 4.36.064 17.736.008 51.984-3.176 74.232-25.416 30.472-30.488 25.168-83.48 24.92-85.712a7.993 7.993 0 0 0-7.096-7.104zm-74.4-90.448c19.336-19.336 51.912-20.928 65.944-20.672.304 14.016-1.28 46.52-20.68 65.928-19.336 19.328-51.968 20.88-65.944 20.68-.312-14.016 1.28-46.528 20.68-65.936zm-39.376 65.936c-14.048.24-46.6-1.352-65.936-20.68-19.336-19.336-20.952-51.912-20.664-65.936 13.944-.352 46.52 1.272 65.928 20.68 19.328 19.336 20.952 51.896 20.672 65.936zm0 126.696c-14.032.36-46.528-1.28-65.936-20.68-19.336-19.336-20.952-51.92-20.664-65.944 13.96-.344 46.52 1.28 65.928 20.688 19.336 19.336 20.96 51.912 20.672 65.936zm14.496-230.656h-10.296c-10.96-11.712-26.848-32.688-26.848-56 0-27.336 21.872-51.504 32-61.232 10.128 9.728 32 33.896 32 61.232 0 23.312-15.888 44.288-26.856 56zm70.144 209.976c-19.336 19.336-51.928 20.888-65.944 20.672-.312-14.016 1.28-46.52 20.68-65.928 19.328-19.328 51.944-20.92 65.928-20.68.288 14.04-1.344 46.608-20.664 65.936zM124.696 29.511a242.811 242.811 0 0 0-13.8 8.2l8.64 13.472c4.192-2.688 8.48-5.24 12.864-7.64l-7.704-14.032zM232.048.135l.536 15.984c4.968-.168 10-.152 14.976.008l.536-15.984a233.347 233.347 0 0 0-16.048-.008zM216.048 1.183a236.605 236.605 0 0 0-15.912 2.128l2.648 15.784a220.785 220.785 0 0 1 14.848-1.984l-1.584-15.928zM264.096 1.199l-1.584 15.92c5 .496 9.944 1.168 14.832 1.984L280 3.327a247.914 247.914 0 0 0-15.904-2.128zM184.408 6.495a240.926 240.926 0 0 0-15.48 4.232l4.736 15.28a223.498 223.498 0 0 1 14.448-3.952l-3.704-15.56zM295.72 6.519l-3.712 15.56a229.826 229.826 0 0 1 14.432 3.96l4.76-15.28a244.775 244.775 0 0 0-15.48-4.24zM153.776 15.999a237.471 237.471 0 0 0-14.768 6.264l6.744 14.512a228.025 228.025 0 0 1 13.776-5.856l-5.752-14.92zM355.424 29.591l-7.728 14.008a228.34 228.34 0 0 1 12.88 7.656l8.624-13.48a247.66 247.66 0 0 0-13.776-8.184zM326.344 16.047l-5.768 14.92a229.993 229.993 0 0 1 13.768 5.856l6.768-14.496c-4.8-2.24-9.768-4.352-14.768-6.28zM145.656 443.175l-6.768 14.496c4.8 2.24 9.768 4.352 14.768 6.28l5.768-14.92a229.993 229.993 0 0 1-13.768-5.856zM277.208 460.895a215.092 215.092 0 0 1-14.848 1.992l1.584 15.92a236.605 236.605 0 0 0 15.912-2.128l-2.648-15.784zM119.424 428.735l-8.624 13.488a247.66 247.66 0 0 0 13.776 8.184l7.728-14.016a228.34 228.34 0 0 1-12.88-7.656zM173.568 453.951l-4.76 15.28c5.056 1.568 10.264 3 15.48 4.24l3.712-15.56a229.826 229.826 0 0 1-14.432-3.96zM247.416 463.879c-4.976.16-10.008.152-14.984-.008l-.528 15.984c2.688.096 5.392.144 8.096.144 2.664 0 5.312-.04 7.952-.136l-.536-15.984zM360.464 428.815a215.932 215.932 0 0 1-12.864 7.64l7.704 14.032a242.811 242.811 0 0 0 13.8-8.2l-8.64-13.472zM202.648 460.895L200 476.671c5.248.88 10.6 1.592 15.896 2.128l1.584-15.92c-5-.496-9.944-1.168-14.832-1.984zM306.336 453.991a223.498 223.498 0 0 1-14.448 3.952l3.704 15.56a240.926 240.926 0 0 0 15.48-4.232l-4.736-15.28zM334.248 443.223a228.025 228.025 0 0 1-13.776 5.856l5.752 14.92a237.471 237.471 0 0 0 14.768-6.264l-6.744-14.512z" data-original="#000000" class="active-path" data-old_color="#F7F4F4" fill="#FCFAFA"/></symbol></svg>
    </div>
    <header class="header" id="home">
      <div class="header__top">
        <div class="header__panel">
          <div class="header__logo">
            <?php the_custom_logo($ blog_id); ?>
          </div>
          <button class="header__toggle header__toggle--cross" type="button"></button>
        </div>
        <?php if(!dynamic_sidebar('menu_id')): ?>
        <nav class="header__menu">
          <ul class="menu menu--nojs" id="menu">
            <li class="menu-item"><a class="menu__link" href="#tasks">Задачи</a></li>
            <li class="menu-item"><a class="menu__link" href="#partner">Партнеры</a></li>
            <li class="menu-item"><a class="menu__link" href="#ideas">Идеи</a></li>
            <li class="menu-item"><a class="menu__link" href="#team">Команда</a></li>
            <li class="menu-item"><a class="menu__link" href="#result">Результаты</a></li>
            <li class="menu-item"><a class="menu__link" href="#contacts">Контакты</a></li>
          </ul>
        </nav>
        <?php endif; ?>
      </div>
      <h1 class="header__title">Food & diabetes</h1>
      <p class="header__intro">Главная цель социального проекта FOOD & DIABETES направлена на решение повседневных проблем, с которыми сталкиваются люди страдающие диабетом, а еще множество других приверженцев здорового образа жизни.</p>
    </header>
