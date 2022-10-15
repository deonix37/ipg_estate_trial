<?php

require_once __DIR__ . '/config.php';

$appointmentTimes = $db->query(
    'SELECT * FROM appointment_time'
)->fetchAll();
$doctors = $db->query(
    'SELECT * FROM doctor'
)->fetchAll();

?>
<!doctype html>
<html>
<head>
    <title>Справочник</title>
    <script src="index.js" defer></script>
</head>
<body>
    <h2>Запись на приём к врачу</h2>
    <form id="appointment-form" method="POST">
        <p>
            <label>
                Дата:
                <input name="appointment_date" type="date" required>
            </label>
        </p>
        <p>
            <label>
                Время:
                <select name="appointment_time_id" required>
                    <option value="">Не выбрано</option>
                    <?php foreach ($appointmentTimes as $appointmentTime): ?>
                        <option value="<?= $appointmentTime['id'] ?>">
                            <?= $appointmentTime['time'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </label>
        </p>
        <p>
            <label>
                Врач:
                <select name="doctor_id" required>
                    <option value="">Не выбрано</option>
                    <?php foreach ($doctors as $doctor): ?>
                        <option value="<?= $doctor['id'] ?>">
                            <?= $doctor['name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </label>
        </p>
        <p>
            <button>Отправить</button>
        </p>
    </form>
</body>
</html>
