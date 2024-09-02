<a href="https://github.com/Emscherland/fpdf/actions"><img src="https://github.com/Emscherland/fpdf/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/emscherland/fpdf"><img src="https://img.shields.io/packagist/v/emscherland/fpdf" alt="Latest Stable Version"></a>
<a href=""><img alt="PHP Version" src="https://img.shields.io/packagist/dependency-v/emscherland/fpdf/php?server=https%3A%2F%2Fpackagist.org&label=PHP"></a>
<a href="https://packagist.org/packages/emscherland/fpdf"><img src="https://img.shields.io/packagist/l/emscherland/fpdf" alt="License"></a>


# FPDF
  
  This repository is a wrapper (with small enhancements) around the popular FPDF library.
  See [FPDF homepage](http://www.fpdf.org/) for more information about the usage.
  
  It also includes the class fpdfprotection that extends fpdf and sets some basic protection for PDF-files.
  
## Installation using [Composer](https://getcomposer.org/)
  ```sh
  $ composer require emscherland/fpdf
  ```
  
  
## Usage (fpdf without protection)

In your php file where you want to use the class: 
``` php
$pdf = new \Emscherland\Fpdf\Fpdf();
```
For the usage please look at the FPDF documentation.

## Usage (fpdf with protection)

In your php file where you want to use the class: 
``` php
$pdf = new \Emscherland\Fpdf\FpdfProtection();
```
For the usage please look at the FPDF documentation.

To set password and protection level (with example data):
``` php
$permission=array('print', 'modify', 'copy', 'annot-forms');
$user_pass='geheim';
$owner_pass='strenggeheim';

$pdf->SetProtection($permission,$user_pass,$owner_pass);
```
Please choose your own passwords. :-)



### License FPDF

```text
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software to use, copy, modify, distribute, sublicense, and/or sell
copies of the software, and to permit persons to whom the software is furnished
to do so.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED.
```

### License fpdfprotection
```text
You may use and modify this software as you wish as stated in original FPDF package.
```

