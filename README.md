Access Instructions:

Do the clone of the repository

``` 
$ git clone https://github.com/gabrielmrp/solidprinter.git
```

Enter in the folder

```
$ cd [Diretorio Raiz]/solidprinter
```

The index.php is there. In order to make the tests install the composer and then run:
 

```
$ vendor\bin\phpunit tests/MultipleTest.php --testdox
$ vendor\bin\phpunit tests/MultipleCollectionTest.php --testdox
$ vendor\bin\phpunit tests/PrinterTest.php --testdox
```

