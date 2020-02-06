<!DOCTPE html>
<html>
<head>
<title>ViewRecords</title>
</head>
<body>
<table border = "1">
<tr>
<td>Name</td>
<td>Time In</td>
<td>Time Out</td>
<td>Total Hours Worked</td>
<td>Total Break Used</td>
</tr>
@foreach ($employee as $record)
<tr>
<td>{{ $record->name }}</td>
<td>{{ $record->timeIn }}</td>
<td>{{ $record->timeOut }}</td>
<td>{{ $record->totalHoursWorked}}</td>
<td>{{ $record->totalBreakUsed }}</td>
</tr>
@endforeach
</table>
</body>
</html>