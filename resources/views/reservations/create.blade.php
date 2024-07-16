<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حجز جديد</title>
</head>
<body>
    <h1>إنشاء حجز جديد</h1>
    <form action="{{ route('reservations.store') }}" method="post">
        @csrf
        <label for="name">الاسم:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="age">العمر:</label><br>
        <input type="text" id="age" name="age"><br>

        <label for="address">العنوان:</label><br>
        <input type="text" id="address" name="address"><br>

        <label for="day">اليوم:</label><br>
        <input type="text" id="day" name="day"><br>

        <label for="hour">الرقم:</label><br>
        <input type="text" id="hour" name="hour"><br>

        <label for="date_time">التاريخ والوقت:</label><br>
        <input type="datetime-local" id="date_time" name="date_time"><br><br>

        <input type="submit" value="إرسال">
    </form>
</body>
</html>
