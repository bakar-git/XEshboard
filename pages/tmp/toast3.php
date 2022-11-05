<style>
    @media screen and (max-width: 599px) {
        #__a231__ {
            width: 100%;
        }
    }
    @media screen and (min-width: 600px) {
        #__a231__ {
            width: 50%;
        }
    }

</style>
<div class="mx-auto d-flex flex-column" id="__a231__">
    <style>
        .toast,
        .toast > div,
        .toast .circle{
            display: flex;
        }

        .toast{
            background-color: white;
            animation: fx_show 1.3s, fx_slide 0.6s;
            animation-iteration-count: 1;
            animation-fill-mode: both;
            transform: translate(80%, 0%);
            opacity: 0;
            animation-play-state: paused;
        }
        .toast > .header,
        .toast > .footer{
            padding: 8px;
        }
        .toast > .body{
            flex: 1;
            align-items: center;
            padding: 0px 5px;
        }
        .toast > div > .circle{
            margin: auto;
            padding: 12px;
            border-radius: 100%;
            position: relative;
            border: 2px solid white;
        }
        .toast > div > .circle > .icon{
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            font-size: 14px;
            color: white;
        }
        .toast > div > .toastClose{
            margin: auto;
            padding: 5px;
            cursor: pointer;
            color: var(--mute);
        }
        .toast > div > .title{
            font-size: 14px;
        }
    </style>
    <div class="toast mb-3 shadow">
        <div class="header bg-success">
            <div class="circle">
                <i class="far fa-check icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">Success</p>
        </div>
        <div class="footer">
            <i class="fal fa-times toastClose"></i>
        </div>
    </div>
    <div class="toast mb-3 shadow">
        <div class="header bg-info">
            <div class="circle">
                <i class="fas fa-info icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">info</p>
        </div>
        <div class="footer">
            <i class="fal fa-times toastClose"></i>
        </div>
    </div>
    <div class="toast mb-3 shadow">
        <div class="header bg-warning">
            <div class="circle">
                <i class="fas fa-exclamation icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">warning</p>
        </div>
        <div class="footer">
            <i class="fal fa-times toastClose"></i>
        </div>
    </div>
    <div class="toast mb-3 shadow">
        <div class="header bg-danger">
            <div class="circle">
                <i class="fas fa-skull-crossbones icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">danger</p>
        </div>
        <div class="footer">
            <i class="fal fa-times toastClose"></i>
        </div>
    </div>
    <script>
        window.addEventListener('load', function () {
            // main functionality
            document.querySelectorAll(".toast").forEach(toast => {
                toast.style.animationPlayState = 'running';
                toast.querySelector('.toastClose').onclick = () => {
                    toast.style.transform = 'none';
                    toast.style.opacity = 1;
                    toast.style.animation = 'bounceOutRight 2s, fx_hide 2.5s';
                    setTimeout(() => {
                        toast.remove();
                    }, 600);
                }
                // for auto removal
                setTimeout(()=>{
                    toast.style.transform = 'none';
                    toast.style.opacity = 1;
                    toast.style.animation = 'bounceOutRight 2s, fx_hide 2.5s';
                }, 8000);
                setTimeout(()=>{
                    toast.remove();
                }, 10000);
            });
        });

    </script>
</div>