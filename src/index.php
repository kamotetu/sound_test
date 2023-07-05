<!-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />

<body>
    <audio src="./jump01.mp3" type="audio/mp3" id="sound"></audio>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.1.1/howler.min.js"></script>
    <button id="button">音出る</button>
    <script>
        var sound = new Howl({ src: ['./jump01.mp3'] })
        sound.play();
        let sound = document.getElementById('sound');
        sound.load();
        sound.play();
        (document.getElementById('button')).addEventListener('click', function(e) {
            e.preventDefault();
            // const sounds = new Object();
            // let sound = new Audio("./jump01.mp3");

            // sound.play();
            // sounds.jump_sound = sound;
            // sounds.jump_sound.play();
            setTimeout(() => {
                const body = document.querySelector('body');
                const div = document.createElement('div');
                div.innerText = 'hello';
                div.id = 'hello';
                body.appendChild(div);
            }, 2000);
        });

        let is_played = false;
        let interval_id = setInterval(() => {
            if (!is_played) {
                let hello = document.getElementById('hello');
                if (hello) {
                    // let sound = document.getElementById('sound');
                    let sound = new Audio("./jump01.mp3");
                    sound.load();
                    sound.play();
                    is_played = true;
                }
            } else {
                clearInterval(interval_id);
            }
        }, 1000);

        const sounds = new Object();
        let sound = new Audio("./jump01.mp3");
        sound.load();
        sounds.jump_sound = sound;
        sounds.jump_sound.play();

        (document.getElementById('button')).addEventListener('click', function(e) {
            e.preventDefault();
            const sounds = new Object();
            let sound = new Audio("./jump01.mp3");
            sound.load();
            sound.play();
        });
    </script>
</body>

</html> -->


<!-- <!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">

<body>
    <button id="button">音出る</button>
    <script>
        (document.getElementById('button')).addEventListener('click', function(e) {
            e.preventDefault();
            let sound = new Audio("./jump01.mp3");
            sound.load();
            sound.play();
        });
    </script>
</body>

</html> -->


<!-- <!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8" />

    <body>
        <button id="button">最初から音出す</button>
        <script>
            let sound = new Audio("./jump01.mp3");
            sound.load();
            sound.play();
            is_played = true;
        </script>
    </body>
</html> -->


<!DOCTYPE html>
<html lang="ja">
    <meta charset="utf-8" />
    <body>
        <button id="button">ある要素を見つけたら音出る</button>
        <script>
            let sound = null;
            (document.getElementById('button')).addEventListener('click', function(e) {
                e.preventDefault();
                sound = new Audio("./jump01.mp3");
                sound.load();
                sound.muted = true;
                sound.play();
                const body = document.querySelector('body');
                const div = document.createElement('div');
                div.innerText = 'hello';
                div.id = 'hello';
                body.appendChild(div);
            });
            let is_played = false;
            let interval_id = setInterval(() => {
                if (!is_played) {
                    let hello = document.getElementById('hello');
                    if (hello && sound !== null) {
                        sound.currentTime = 0;
                        sound.muted = false;
                        sound.play();
                        is_played = true;
                    }
                } else {
                    clearInterval(interval_id);
                }
            }, 1000);
        </script>
    </body>
</html>
