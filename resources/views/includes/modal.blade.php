<!-- Модальное окно заявки -->
<div class="modal-overlay" id="request-modal-overlay" style="display: none;">
    <div class="modal-container" id="request-modal">
        <button class="modal-close" id="modal-close-btn">&times;</button>
        <div class="modal-header">
            <h3>Быстрая заявка</h3>
            <p>Оставьте контакты, и мы перезвоним для уточнения деталей</p>
        </div>
        <form id="quick-request-form" class="modal-form">
            @csrf
            <div class="form-group">
                <label for="modal-name">Ваше имя <span class="required">*</span></label>
                <input type="text" id="modal-name" name="name" required placeholder="Например: Иван Петров">
            </div>
            <div class="form-group">
                <label for="modal-phone">Номер телефона <span class="required">*</span></label>
                <input type="tel" id="modal-phone" name="phone" required placeholder="+7 (___) ___-__-__">
            </div>
            <div class="form-group">
                <label for="modal-address">Адрес доставки / Координаты</label>
                <input type="text" id="modal-address" name="address" placeholder="Город, улица или координаты">
                <small>Например: г. Ижевск, ул. Ленина, 1 или 56.123, 53.456</small>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Отправить заявку</button>
        </form>
        <div class="modal-footer">
            <small>Нажимая «Отправить», вы соглашаетесь на обработку персональных данных</small>
        </div>
    </div>
</div>
