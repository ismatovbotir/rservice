<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сервисный центр RSG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        /* Фирменные цвета RSG */
        :root {
            --rsg-blue: #004080; /* Пример основного синего цвета */
            --rsg-gray: #f0f0f0; /* Светло-серый фон */
            --rsg-dark-gray: #333333; /* Темно-серый текст */
        }
        body {
            font-family: 'Arial', sans-serif; /* Используйте шрифт, схожий с rsg.uz */
            background-color: var(--rsg-gray);
            color: var(--rsg-dark-gray);
        }
        .header, .footer {
            background-color: var(--rsg-blue);
            color: white;
        }
        .button {
            background-color: var(--rsg-blue);
            color: white;
        }
    </style>
</head>
<body>
    <header class="header p-6 text-center">
        <h1 class="text-3xl font-bold">Сервисный центр Retail Service Group</h1>
        <p class="text-lg">Профессиональная поддержка вашего торгового оборудования и ПО</p>
    </header>

    <section class="max-w-4xl mx-auto p-6 bg-white shadow-lg mt-6 rounded-lg">
        <h2 class="text-2xl font-semibold">Наши услуги</h2>
        <ul class="list-disc pl-6 mt-4">
            <li>Обслуживание и ремонт POS-оборудования</li>
            <li>Обновление и устранение неполадок программного обеспечения</li>
            <li>Установка и настройка новых устройств</li>
            <li>Технические консультации и поддержка</li>
        </ul>
    </section>

    <section class="max-w-4xl mx-auto p-6 bg-white shadow-lg mt-6 rounded-lg">
        <h2 class="text-2xl font-semibold">Оставить заявку на обслуживание</h2>
        <form action="#" method="POST" class="mt-4">
            <div class="mb-4">
                <label class="block">ФИО</label>
                <input type="text" name="name" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label class="block">Описание проблемы</label>
                <textarea name="message" class="w-full p-2 border rounded-lg" rows="4" required></textarea>
            </div>
            <button type="submit" class="button px-4 py-2 rounded-lg">Отправить заявку</button>
        </form>
    </section>

    <footer class="footer text-center p-4 mt-6">
        <p>&copy; 2025 Retail Service Group. Все права защищены.</p>
    </footer>
</body>
</html>
