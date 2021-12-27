<div class="popup popup-whatsapp">
    <div class="popup-icon"></div>
</div>


<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="w-full max-w-xs">
            <form id="form-contact" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <p class="form-error text-red-600 text-bold mb-2 hidden">Необходимо заполнить все поля</p>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Ваше имя
                    </label>
                    <input
                        id="name"
                        type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Имя"
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tel">
                        Телефон
                    </label>
                    <input
                        id="tel"
                        type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Тел"
                    >
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="theme">
                        Тема обращения
                    </label>
                    <textarea
                        rows="5"
                        id="theme"
                        type="text"
                        placeholder="Сообщение"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    ></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="btn-submit bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Отправить
                    </button>
                    <a class="btn-close inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Закрыть
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

