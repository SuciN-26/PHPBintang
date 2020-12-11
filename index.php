<?php

echo "Segi empat <br/>";

for ($i = 0; $i < 5; $i++) {
	for ($j = 0; $j < 5; $j++) {
		echo "* ";
	}
	echo "<br/>";
}

echo "<br/>";

echo "Segitiga Siku siku 1 <br/>";

for ($i = 0; $i < 5; $i++) {
	for ($j = 0; $j < 5 - $i; $j++) {
		echo "* ";
	}

	echo "<br/>";
}

echo "<br/>";

echo "Segitiga Siku siku 2 <br/>";

for ($i = 5; $i > 0; $i--) {
	for ($j = 0; $j < 6 - $i; $j++) {
		echo "* ";
	}
	echo "<br/>";
}

echo "<br/>";

echo "Segitiga Siku siku 3 <br/>";

for ($i = 5; $i > 0; $i--) {
	echo "*";
}
