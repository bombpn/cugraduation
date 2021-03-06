<?php
    //load our new PHPExcel library
    //$this->load->library('excel');
    //activate worksheet number 1
    $this->excel->setActiveSheetIndex(0);
    //$this->excel->createSheet(NULL, 1);
    $this->excel->getActiveSheet()->setTitle('report');
    $this->excel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
    $this->excel->getActiveSheet()->getPageSetup()->setFitToPage(false);

    $this->excel->getDefaultStyle()->getFont()->setName('TH Sarabun New');
    $this->excel->getDefaultStyle()->getFont()->setSize(14);
    $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(14);
    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(9);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(19);
    $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(19);
    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
    $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(10);

    $this->excel->getActiveSheet()->getStyle('A1:H2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $this->excel->getActiveSheet()->setCellValue('A1', $title);
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
    $this->excel->getActiveSheet()->mergeCells('A1:H1');
    
    $this->excel->getActiveSheet()->setCellValue('A2', 'Order');

    $this->excel->getActiveSheet()->setCellValue('B2', 'ID');

    $this->excel->getActiveSheet()->setCellValue('C2', 'prefix');

    $this->excel->getActiveSheet()->setCellValue('D2', 'Firstname');

    $this->excel->getActiveSheet()->setCellValue('E2', 'Lastname');

    $this->excel->getActiveSheet()->setCellValue('F2', 'Rehearsal1');

    $this->excel->getActiveSheet()->setCellValue('G2', 'Rehearsal2');

    $this->excel->getActiveSheet()->setCellValue('H2', 'Graduation');

    $n = 3;
    foreach ($data as $d) {
      //$this->excel->getActiveSheet()->setCellValue('A5', 'A');
      $this->excel->getActiveSheet()->setCellValue('A'.$n, $d['order']);
      $this->excel->getActiveSheet()->setCellValue('B'.$n, $d['student_id']);
      $this->excel->getActiveSheet()->getStyle('A'.$n.':B'.$n)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
      $this->excel->getActiveSheet()->setCellValue('C'.$n, $d['th_prefix']);
      $this->excel->getActiveSheet()->setCellValue('D'.$n, $d['th_firstname']);
      $this->excel->getActiveSheet()->setCellValue('E'.$n, $d['th_lastname']);
      if ($d['round1']==0)$this->excel->getActiveSheet()->setCellValue('F'.$n, "X");
      else $this->excel->getActiveSheet()->setCellValue('F'.$n, "O");
      if ($d['round2']==0)$this->excel->getActiveSheet()->setCellValue('G'.$n, "X");
      else $this->excel->getActiveSheet()->setCellValue('G'.$n, "O");
      if ($d['round3']==0)$this->excel->getActiveSheet()->setCellValue('H'.$n, "X");
      else $this->excel->getActiveSheet()->setCellValue('H'.$n, "O");
      $this->excel->getActiveSheet()->getStyle('F'.$n.':H'.$n)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
      $n++;
    }

    //$filename='just_some_random_name.xlsx'; //save our workbook as this file name
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache
                
    //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
    //if you want to save it as .XLSX Excel 2007 format
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');  
    //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');
?>