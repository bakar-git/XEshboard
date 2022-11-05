<div>
    <style>
        .checkboxWrapper {
            width: 20px;
            height: 20px;
            border-radius: 5px;
            position: relative;
        }

        .checkbox {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .checkboxStyle {
            pointer-events: none;
            border: 1px solid rgb(199, 199, 199);
            position: relative;
            display: flex;
            border-radius: inherit;
            width: 100%;
            height: 100%;
            transition: background-color 0.2s;
            background-color: transparent;
        }

        .checkboxStyle::before,
        .checkboxStyle::after {
            transition: transform 0.2s;
            content: "";
            top: 50%;
            position: absolute;
            border-radius: inherit;
            background-color: rgb(255, 255, 255);
            width: 50%;
            height: 10%;
        }

        .checkboxStyle::before {
            transform: translate(-50%, -50%) rotateZ(0deg);
            left: 50%;
        }

        .checkboxStyle::after {
            right: 50%;
            transform: translate(50%, -50%) rotateZ(0deg);
        }

        .checkbox:checked+.checkboxStyle {
            background-color: var(--primary);
        }

        .checkbox:checked+.checkboxStyle::before {
            transform: translate(-50%, -50%) rotateZ(180deg);
        }

        .checkbox:checked+.checkboxStyle::after {
            transform: translate(50%, -50%) rotateZ(90deg);
        }
    </style>
    <div class="checkboxWrapper">
        <input class="checkbox" type="checkbox">
        <span class="checkboxStyle"></span>
    </div>
</div>