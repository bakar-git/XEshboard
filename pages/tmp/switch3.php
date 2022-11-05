<div class="d-flex">
    <style>
      .switchWrapper{
        position: relative;
        border-radius: 60px;
        width: 60px;
        height: 10px;
      }
      .switch{
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
      }
      .switchStyle{
        position: relative;
        pointer-events: none;
        display: flex;
        border-radius: inherit;
        width: 100%;
        height: 100%;
        background-color: var(--primary);
      }
      .switchStyle::after{
        transition: left 0.2s cubic-bezier(1, 0,0, 1), background-color 0.2s linear;
        content: "";
        top: 50%;
        left: 0%;
        position: absolute;
        width: 35%;
        height: 200%;
        transform: translate(0%, -50%);
        border-radius: inherit;
        background-color: var(--mute);
      }
      .switch:checked + .switchStyle::after{
        background-color: var(--white);
        left: 80%;
      }
    </style>
    <div class="switchWrapper">
      <input class="switch" type="checkbox">
      <span class="switchStyle"></span>
    </div>
  </div>