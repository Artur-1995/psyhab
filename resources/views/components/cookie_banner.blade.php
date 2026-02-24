<style>

</style>
<div id="cookie-banner" class="{{ session()->has('cookies_accepted') ? 'hidden' : '' }} messages_cookies show">
    <div class="messages_cookies-wrp">
        Мы используем cookie-файлы. <br>
        Продолжая пользоваться сайтом без изменения настроек, вы даете согласие на использование cookie-файлов в соответствии с
        <a href="/politica-konfidencialnosti" class="politika_konfidentsialnosti">Политикой конфиденциалности.</a>
        <button class="agree-btn fbb btn btn-success">Принять</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const agreeButton = document.querySelector('.agree-btn');
        agreeButton.addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('cookie-banner').classList.add('hidden');
            fetch('/accept-cookies', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            }).then(response => response.json())
              .then(data => console.log(data))
              .catch(error => console.error('Ошибка:', error));
        });
    });
</script>
