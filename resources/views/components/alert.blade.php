<div class="error">
     {{ $slot }}
</div>

<style>
    .error {
        height: 5vh;
        background: #e85d5d87;
        color: rgb(255, 10, 10);
        position: absolute;
        font-weight: 900;
        top: 0;
        right: 5px;
        border-radius: 5px;

    }

    @keyframes errorAnimate {
        0% {
            background-color: rgb(234, 120, 120);
            left: 0px;
            top: 0px;
        }

        25% {
            background-color: #e85d5d87;
            left: 25vw;
            top: 0px;
        }

        50% {
            background-color: #f1414187;
            left: 50vw;
            top: 0;
        }

        75% {
            background-color: #ea282887;
            left: 75vw;
            top: 0px;
        }

        100% {
            background-color: red;
            left: 100vw;
            top: 0px;
        }
    }

    .error{
        width: fit-content;
        animation-name: errorAnimate;
        animation-duration: 10s;
        animation-timing-function: linear;
    }

</style>
<script>
    setTimeout(() => {
        document.getElementById("error").innerHTML = '';
    }, 10000);
</script>
