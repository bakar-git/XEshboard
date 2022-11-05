<div class="d-flex">
    <style>
        .checkboxWrapper {
            position: relative;
            width: 20px;
            height: 20px;
            border-radius: 5px;
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
            border-radius: inherit;
            position: relative;
            display: flex;
            width: 100%;
            height: 100%;
            transition: background-color 0.2s;
            overflow: hidden;
            background-color: transparent;
        }

        .checkboxStyle::before,
        .checkboxStyle::after {
            transition: transform 0.2s, left 0.2s, right 0.2s, top 0.2s;
            content: "";
            top: -20%;
            position: absolute;
            border-radius: inherit;
            background-color: white;
        }

        .checkboxStyle::before {
            transform: translate(-50%, 0%) rotateZ(45deg);
            width: 20%;
            height: 10%;
            left: 0%;
        }

        .checkboxStyle::after {
            right: 0%;
            transform: translate(50%, 0%) rotateZ(-45deg);
            width: 50%;
            height: 10%;
        }

        .checkbox:checked+.checkboxStyle {
            background-color: var(--primary);
        }

        .checkbox:checked+.checkboxStyle::before {
            transform: translate(-50%, -20%) rotateZ(45deg);
            top: 55%;
            left: 35%;
        }

        .checkbox:checked+.checkboxStyle::after {
            transform: translate(50%, -100%) rotateZ(-45deg);
            top: 55%;
            right: 45%;
        }
    </style>
    <div class="checkboxWrapper">
        <input class="checkbox" type="checkbox">
        <span class="checkboxStyle"></span>
    </div>
</div>