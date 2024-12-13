<?php
// Include PhpSpreadsheet classes
require_once '../vendors/PhpSpreadsheet/src/PhpSpreadsheet/Spreadsheet.php';
require_once '../vendors/PhpSpreadsheet/src/PhpSpreadsheet/Writer/Xlsx.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Sample task data (Replace with your database fetch logic)
$tasks = [
  ["id" => 10, "name" => "Hello world", "starttime" => "2024-12-12 09:40:00", "endtime" => "2024-12-22 09:40:00", "status" => "in-progress", "created_at" => "2024-12-05 09:40:07"],
  ["id" => 5, "name" => "Eat", "starttime" => "2024-12-05 06:53:00", "endtime" => "2024-12-17 06:53:00", "status" => "completed", "created_at" => "2024-12-01 22:53:40"],
  ["id" => 4, "name" => "Go to sleep.", "starttime" => "2024-12-02 22:56:00", "endtime" => "2024-12-19 22:53:00", "status" => "in-progress", "created_at" => "2024-12-01 22:53:06"]
];

// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set headers for the Excel file
$headers = ['Task ID', 'Task Name', 'Start Time', 'End Time', 'Status', 'Created At'];
$sheet->fromArray($headers, NULL, 'A1'); // Add headers starting at cell A1

// Add task data to the sheet
$rowNumber = 2;  // Start from row 2 for the task data (after the header)
foreach ($tasks as $task) {
  $sheet->setCellValue('A' . $rowNumber, $task['id']);
  $sheet->setCellValue('B' . $rowNumber, $task['name']);
  $sheet->setCellValue('C' . $rowNumber, $task['starttime']);
  $sheet->setCellValue('D' . $rowNumber, $task['endtime']);
  $sheet->setCellValue('E' . $rowNumber, $task['status']);
  $sheet->setCellValue('F' . $rowNumber, $task['created_at']);
  $rowNumber++;
}

// Set headers to force the download of the Excel file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="tasks.xlsx"');
header('Cache-Control: max-age=0');

// Write the file to output and force download
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
