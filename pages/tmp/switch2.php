<div class="d-flex mx-auto">
    <style>
        .switchWrapper {
            width: 40px;
            height: 20px;
            border-radius: 40px;
            position: relative;
        }

        .switch {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .switchStyle {
            pointer-events: none;
            border: var(--primary-dark) solid 2px;
            border-radius: inherit;
            position: relative;
            display: flex;
            width: 100%;
            height: 100%;
            transition: background-color 0.2s;
            background-color: transparent;
        }

        .switchStyle::after {
            transition: left 0.2s cubic-bezier(1, 0, 0, 2), transform 0.2s cubic-bezier(1, 0, 0, 2), background-color 0.2s cubic-bezier(1, 0, 0, 2);
            content: "";
            top: 50%;
            left: 10%;
            position: absolute;
            width: 30%;
            height: 60%;
            transform: translate(0%, -50%);
            border-radius: inherit;
            background-color: var(--mute);
        }

        .switch:checked+.switchStyle {
            background: var(--primary-dark);
        }

        .switch:checked+.switchStyle::after {
            background-color: var(--white);
            left: 90%;
            transform: translate(-100%, -50%);
        }
    </style>
    <div class="switchWrapper">
        <input class="switch" type="checkbox">
        <span class="switchStyle"></span>
    </div>
</div>