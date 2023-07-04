<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />

<body>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.1.1/howler.min.js"></script> -->
    <button id="button">音出る</button>
    <script>
        // var sound = new Howl({ src: ['./jump01.mp3'] })
        // sound.play();
        // (document.getElementById('button')).addEventListener('click', function (e) {
        //     e.preventDefault();
        //     const sounds = new Object();
        //     let sound = new Audio("./jump01.mp3");
        //     sound.load();
        //     sounds.jump_sound = sound;
        //     sounds.jump_sound.play();
        // });
        const sounds = new Object();
        let sound = new Audio("./jump01.mp3");
        sound.load();
        sounds.jump_sound = sound;
        sounds.jump_sound.play();
    </script>
</body>
</html>