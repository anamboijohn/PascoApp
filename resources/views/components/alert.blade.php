<div class="error">
     {{ $slot }}
</div>

<style>
    .error {
        height: 5vh;
        color: rgb(255, 10, 10);
        position: absolute;
        font-weight: 900;
        top: 0;
        right: 5px;
        border-radius: 5px;

    }

    @keyframes errorAnimate {
        0% {
            background-color: #f79b9b87;
            left: 0px;
            top: 0px;
        }

        10% {
            background: transparent;
            left: 10vw;
            top: 0px;
        }

        20% {
            background-color: #c42c2c87;
            left: 20vw;
            top: 0;
        }

        30% {
            background: transparent;
            left: 30vw;
            top: 0px;
        }

        40% {
            background-color: #76030387;
            left: 40vw;
            top: 0px;
        }
        50% {
            background: transparent;
            left: 50vw;
            top: 0px;
        }
        60% {
            background-color: #76030387;
            left: 60vw;
            top: 0px;
        }
        70% {
            background-color: transparent;
            left: 70vw;
            top: 0px;
        }
        80% {
            background-color: #76030387;
            left: 80vw;
            top: 0px;
        }
        90% {
            background-color: transparent;
            left: 90vw;
            top: 0px;
        }
        100% {
            background-color: #76030387;
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
