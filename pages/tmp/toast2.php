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
            border-left: 4px solid black;
            border-radius: 5px;
            padding: 20px 0px;
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
            padding: 0px 10px;
        }
        .toast > .body{
            flex: 1;
            flex-direction: column;
        }
        .toast > div > .circle{
            margin: auto;
            padding: 13px;
            border-radius: 100%;
            position: relative;
        }
        .toast > div > .circle > .icon{
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            color: white;
        }
        .toast > div > .toastClose{
            margin: auto;
            font-size: 20px;
            padding: 5px;
            cursor: pointer;
            color: var(--mute);
        }
        .toast > div > .title{
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 4px;
            color: var(--primary);
        }
        .toast > div > .subject{
            color: var(--mute);
        }
    </style>
    <div class="toast mb-3 shadow" style="border-color: var(--success);">
        <div class="header">
            <div class="circle bg-success">
                <i class="fas fa-check icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">Success</p>
            <p class="subject">this is toast for success</p>
        </div>
        <div class="footer">
            <i class="fal fa-times toastClose"></i>
        </div>
    </div>
    <div class="toast mb-3 shadow" style="border-color: var(--info);">
        <div class="header">
            <div class="circle bg-info">
                <i class="fas fa-info icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">Information</p>
            <p class="subject">this is toast for Information</p>
        </div>
        <div class="footer">
            <i class="fal fa-times toastClose"></i>
        </div>
    </div>
    <div class="toast mb-3 shadow" style="border-color: var(--warning);">
        <div class="header">
            <div class="circle bg-warning">
                <i class="fas fa-exclamation icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">Warning</p>
            <p class="subject">this is toast for Warning</p>
        </div>
        <div class="footer">
            <i class="fal fa-times toastClose"></i>
        </div>
    </div>
    <div class="toast mb-3 shadow" style="border-color: var(--danger);">
        <div class="header">
            <div class="circle bg-danger">
                <i class="fas fa-skull-crossbones icon"></i>
            </div>
        </div>
        <div class="body">
            <p class="title">Error</p>
            <p class="subject">this is toast for Error</p>
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
    </script>
</div>