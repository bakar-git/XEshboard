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
        .toast {
            color: white;
            width: 100%;
            height: 90px;
            position: relative;
            animation: fx_show 1.3s, fx_slide 0.6s;
            animation-iteration-count: 1;
            animation-fill-mode: both;
            transform: translate(80%, 0%);
            opacity: 0;
            animation-play-state: paused;
        }

        .toast,
        .toast>.header,
        .toast>.body,
        .toast>.body>.title {
            display: flex;
        }

        .toast>.header {
            width: 30%;
        }

        .toast>.header>i {
            margin: auto;
            font-size: 25px;
            padding: 10px;
        }

        .toast>.body {
            width: 70%;
            flex-direction: column;
            padding: 10px;
        }

        .toast>.body>.title {
            margin-top: auto;
            font-size: 16px;
        }

        .toast>.body>.toastClose {
            position: absolute;
            right: 0;
            top: 0;
            padding: 5px;
            cursor: pointer;
        }

        .toast>.body>.progress-bar {
            height: 2px;
            margin: 5px 0px;
        }
        .toast>.body>.progress-bar>div{
            animation: decrementWidth 10s;
            animation-fill-mode: forwards;
            animation-play-state: paused;
        }

        .toast>.body>.subject {
            margin-bottom: auto;
        }
        @keyframes decrementWidth {
            to {
                width: 0%;
            }
        } 
    </style>
    <div class="toast mb-3">
        <div class="header bg-info">
            <i class="fal fa-tags"></i>
        </div>
        <div class="body" style="background-color: #0097bc;">
            <i class="toastClose fas fa-times clr-white-50"></i>
            <p class="title">Lorem</p>
            <div class="progress-bar bg-light">
                <div class="bg-info"></div>
            </div>
            <p class="subject clr-white-50">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="toast mb-3">
        <div class="header bg-success">
            <i class="fal fa-tags"></i>
        </div>
        <div class="body" style="background-color: #008f4d;">
            <i class="toastClose fas fa-times clr-white-50"></i>
            <p class="title">Lorem</p>
            <div class="progress-bar bg-light">
                <div class="bg-success"></div>
            </div>
            <p class="subject clr-white-50">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="toast mb-3">
        <div class="header bg-danger">
            <i class="fal fa-tags clr-white"></i>
        </div>
        <div class="body" style="background-color: #c04637;">
            <i class="toastClose fas fa-times clr-white-50"></i>
            <p class="title">Lorem</p>
            <div class="progress-bar bg-light">
                <div class="bg-danger"></div>
            </div>
            <p class="subject clr-white-50">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
    <div class="toast mb-3">
        <div class="header bg-warning">
            <i class="fal fa-tags clr-black-50"></i>
        </div>
        <div class="body" style="background-color: #d58910;">
            <i class="toastClose fas fa-times clr-white-50"></i>
            <p class="title">Lorem</p>
            <div class="progress-bar bg-light">
                <div class="bg-warning"></div>
            </div>
            <p class="subject clr-white-50">Lorem ipsum dolor sit amet.</p>
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
                toast.querySelector('.progress-bar > div').style.animationPlayState = 'running';
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