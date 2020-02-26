<?php

interface FigureInterface
{

}

interface PrimitiveInterface
{

}

class Triangle
{

}

class Circle
{

}

class Box
{

}

class Line
{

}

class Point
{

}

$data = [
    new Line(),
    new Box(),
    new Circle(),
    new Point(),
    new Line(),
    new Triangle(),
    new Point(),
    new Circle()
];

$figures = [];
$primitives = [];

