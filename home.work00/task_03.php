<?php
//Задание 3 из Д.З.№1 вебинара Ylab 'Создать абстрактный класс'
//Создаем абстрактный класс
class Abstract_parent
{
        public $str;
        public $nev;

        public function save($str)
            {
                $this->str=$str;
            }

        public function nev($nev)
            {
                $this->nev=$nev;
            }

        public function getName()
            {
                return 'Arbitrary string';
            }
    }
//Наследуем класс от Abstractparent
class MyClass_descendant extends Abstract_parent
    {
            public function getName()
        {
            return $this->str.$this->nev;
        }
    }

$myclass = new MyClass_descendant;

$myclass -> save('Писать скрипты на PHP - Это ');
$myclass -> nev('Здорово!');

echo $myclass -> getName();