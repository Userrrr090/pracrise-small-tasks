<?php

interface iFile
{
    public function __construct($filePath);

    public function getPath(); // путь к файлу
    public function getDir();  // папка файла
    public function getName(); // имя файла
    public function getExt();  // расширение файла
    public function getSize(); // размер файла

    public function getText();          // получает текст файла
    public function setText($text);     // устанавливает текст файла
    public function appendText($text);  // добавляет текст в конец файла

    public function copy($copyPath);    // копирует файл
    public function delete();           // удаляет файл
    public function rename($newName);   // переименовывает файл
    public function replace($newPath);  // перемещает файл
}

class File implements iFile
{
    private string $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function getPath()
    {
        return $this->filePath;
    }

    public function getName()
    {
        return pathinfo($this->filePath, PATHINFO_FILENAME);
    }

    public function getDir()
    {
        return pathinfo($this->filePath, PATHINFO_DIRNAME);
    }

    public function getExt()
    {
        return pathinfo($this->filePath, PATHINFO_EXTENSION);
    }

    public function getSize()
    {
        return filesize($this->filePath);
    }

    public function getText()
    {
        return file_get_contents($this->filePath);
    }

    public function setText($text)
    {
        file_put_contents($this->filePath, $text);
    }

    public function appendText($text)
    {
        file_put_contents($this->filePath, $text, FILE_APPEND);
    }

    public function copy($copyPath)
    {
        copy($this->filePath, $copyPath);
    }

    public function delete()
    {
        unlink($this->filePath);
    }

    public function rename($newName)
    {
        rename(pathinfo($this->filePath, PATHINFO_BASENAME), $newName);
    }

    public function replace($newPath)
    {
        rename($this->filePath, $newPath);
        $this->filePath = $newPath;
    }
}

$test = new File('C:\Users\pavel\PhpstormProjects\untitled\BasicOOP\tasks\testFile.txt');

//echo $test->getName();
//echo PHP_EOL;
//echo $test->getDir();
//echo PHP_EOL;
//echo $test->getExt();
//echo PHP_EOL;
//echo $test->getSize();
//echo PHP_EOL;
//echo $test->getText();
//echo PHP_EOL;

//$test->setText('grffgdfxdv');
//$test->appendText('Hello!!!!');


echo $test->getPath();

$test->replace('C:\Users\pavel\PhpstormProjects\untitled\BasicOOP\tasks\newPath\testFile.txt');

echo PHP_EOL;
echo $test->getPath();
