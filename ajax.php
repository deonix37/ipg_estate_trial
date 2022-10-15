<?php 

require_once __DIR__ . '/config.php';

$stmt = $db->prepare(
    'SELECT 1 FROM appointment WHERE (
        appointment_date = :appointment_date
        AND appointment_time_id = :appointment_time_id
        AND doctor_id = :doctor_id
    )'
);

try {
    $stmt->execute($_POST);
} catch (PDOException $e) {
    result('Ошибка на сервере');
}

if ($stmt->fetch()) {
    result('Такая запись уже существует');
};

$stmt = $db->prepare(
    'INSERT INTO appointment (
        appointment_date,
        appointment_time_id,
        doctor_id
    )
    VALUES (
        :appointment_date,
        :appointment_time_id,
        :doctor_id
    )'
);

try {
    $stmt->execute($_POST);
    result('Запись успешна');
} catch (PDOException $e) {
    result('Ошибка на сервере');
}

function result($result)
{
    echo json_encode(['result' => $result]);
    exit;
}
