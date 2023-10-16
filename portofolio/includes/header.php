<div class="menu">
    <div class="toggle"><ion-icon name="add-outline"></ion-icon></div>
    <li style="--i:0;">
        <a href="#"><ion-icon name="home-outline"></ion-icon></a>
    </li>
    <li style="--i:1;">
        <a href="#"><ion-icon name="person-outline"></ion-icon></a>
    </li>
    <li style="--i:2;">
        <a href="#"><ion-icon name="settings-outline"></ion-icon></a>
    </li>
    <li style="--i:3;">
        <a href="#"><ion-icon name="mail-outline"></ion-icon></a>
    </li>
    <li style="--i:4;">
        <a href="#"><ion-icon name="mail-outline"></ion-icon></a>
    </li>
    <li style="--i:5;">
        <a href="#"><ion-icon name="videocam-outline"></ion-icon></a>
    </li>
    <li style="--i:6;">
        <a href="#"><ion-icon name="game-controller-outline"></ion-icon></a>
    </li>
    <li style="--i:7;">
        <a href="#"><ion-icon name="camera-outline"></ion-icon></a>
    </li>
</div>

<script>
    let toggle = document.querySelector('.toggle');
    let menu = document.querySelector('.menu');
    toggle.onclick = function() {
        menu.classList.toggle('active')
    }
</script>