<div class="d-flex">
    <style>
        .radioWrapper {
            border-radius: 20px;
            position: relative;
            width: 20px;
            height: 20px;
        }

        .radio {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .radioStyle,
        .radioStyle::after {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            border-radius: inherit;
            pointer-events: none;
        }

        .radioStyle {
            background-color: #ffffff;
            box-shadow: 0px 1px 2px 0.1px black;
            width: 50%;
            height: 50%;
            display: flex;
        }

        .radioStyle::after {
            will-change: transform;
            content: "";
            width: 100%;
            height: 100%;
            border: 2px solid var(--primary);
            opacity: 0;
            transition: transform 0.2s;
            transform: translate(-50%, -50%) scale(3);
        }

        .radio:checked+.radioStyle::after {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .radio:checked+.radioStyle {
            animation: rubberBand 0.7s cubic-bezier(0, 0, 0.2, 1);
            animation-delay: 0.2s;
            animation-fill-mode: backwards;
        }

        @keyframes rubberBand {
            from {
                transform: translate(-50%, -50%) scale3d(1, 1, 1);
            }

            30% {
                transform: translate(-50%, -50%) scale3d(1.25, 0.5, 1);
            }

            40% {
                transform: translate(-50%, -50%) scale3d(0.5, 1.25, 1);
            }

            50% {
                transform: translate(-50%, -50%) scale3d(1.5, 0.85, 1);
            }

            65% {
                transform: translate(-50%, -50%) scale3d(.95, 1.05, 1);
            }

            75% {
                transform: translate(-50%, -50%) scale3d(1.05, .95, 1);
            }

            to {
                transform: translate(-50%, -50%) scale3d(1, 1, 1);
            }
        }
    </style>
    <div class="radioWrapper">
        <input class="radio" type="radio" name="radio">
        <span class="radioStyle"></span>
    </div>
    <div class="ml-2 radioWrapper">
        <input class="radio" type="radio" name="radio">
        <span class="radioStyle"></span>
    </div>
</div>