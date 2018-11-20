<?php

require_once("functions.php");

$A0 = s(0, 6);
$B0 = s(0, 36);
$C0 = s(1, 25);
$D0 = s(2, 11);
$E0 = s(2, 43);
$A1 = s(3, 16);
$B1 = s(2, 47);
$C1 = s(4, 27);
$D1 = s(4, 55);
$E1 = s(5, 45);
$F1 = s(6, 40);
$G1 = s(7, 27);
$H1 = s(7, 51);
$I1 = s(8, 45);
$J1 = s(9, 34);
$K1 = s(9, 59);
$L1 = s(10, 10);
$A2 = s(10, 47);
$B2 = s(11, 20);
$C2 = s(11, 50);
$D2 = s(12, 2);
$E2 = s(12, 42);
$F2 = s(12, 57);
$G2 = s(13, 28);
$H2 = s(14, 33);
$I2 = s(14, 55);
$J2 = s(15, 22);
$K2 = s(15, 53);
$L2 = s(16, 6);
$M2 = s(16, 25);
$N2 = s(16, 39);
$O2 = s(17, 17);
$P2 = s(17, 49);
$Q2 = s(18, 06);
$R2 = s(18, 20);
$A3 = s(18, 44);
$B3 = s(19, 8);
$C3 = s(19, 28);
$D3 = s(19, 41);
$E3 = s(19, 57);
$F3 = s(20, 32);
$G3 = s(21, 9);
$A4 = s(21, 56);
$B4 = s(22, 45);
$C4 = s(23, 3);
$D4 = s(23, 32);
$E4 = s(23, 54);
$F4 = s(24, 19);
$G4 = s(28, 48);
$H4 = s(25, 16);
$I4 = s(25, 31);
$J4 = s(25, 52);
$K4 = s(26, 5);
$L4 = s(26, 17);
$M4 = s(26, 28);
$N4 = s(27, 1);
$O4 = s(27, 29);
$P4 = s(27, 44);
$A5 = s(28, 17);
$B5 = s(28, 45);
$C5 = s(29, 35);
$D5 = s(29, 43);
$E5 = s(30, 17);
$F5 = s(30, 26);
$G5 = s(30, 43);
$H5 = s(31, 19);
$I5 = s(31, 52);
$J5 = s(32, 35);
$K5 = s(32, 52);
$L5 = s(33, 11);
$M5 = s(33, 40);
$N5 = s(34, 0);
$O5 = s(34, 30);
$P5 = s(34, 45);
$Q5 = s(35, 17);
$R5 = s(35, 33);
$S5 = s(36, 6);
$T5 = s(36, 31);
$A6 = s(36, 56);
$B6 = s(37, 54);
$C6 = s(38, 56);
$D6 = s(39, 26);
$E6 = s(39, 42);
$F6 = s(40, 9);
$G6 = s(41, 14);
$H6 = s(41, 55);
$I6 = s(42, 39);
$J6 = s(43, 1);
$K6 = s(43, 52);
$allSections = [
	$A0, $B0, $C0, $D0, $E0, 
	$A1, $B1, $C1, $D1, $E1, $F1, $G1, $H1, $I1, $J1, $K1, $L1, 
	$A2, $B2, $C2, $D2, $E2, $F2, $G2, $H2, $I2, $J2, $K2, $L2, $M2, $N2, $O2, $P2, 
	$A3, $B3, $C3, $D3, $E3, $F3, $G3, 
	$A4, $B4, $C4, $D4, $E4, $F4, $G4, $H4, $I4, $J4, $K4, $L4, $M4, $N4, $O4, $P4, 
	$A5, $B5, $C5, $D5, $E5, $F5, $G5, $H5, $I5, $J5, $K5, $L5, $M5, $N5, $O5, $P5, $Q5, $R5, $S5, $T5, 
	$A6, $B6, $C6, $D6, $E6, $F6, $G6, $H6, $I6, $J6, $K6
];

$allSectionNames = [
	"A0", "B0", "C0", "D0", "E0", 
	"A1", "B1", "C1", "D1", "E1", "F1", "G1", "H1", "I1", "J1", "K1", "L1", 
	"A2", "B2", "C2", "D2", "E2", "F2", "G2", "H2", "I2", "J2", "K2", "L2", "M2", "N2", "O2", "P2", 
	"A3", "B3", "C3", "D3", "E3", "F3", "G3", 
	"A4", "B4", "C4", "D4", "E4", "F4", "G4", "H4", "I4", "J4", "K4", "L4", "M4", "N4", "O4", "P4", 
	"A5", "B5", "C5", "D5", "E5", "F5", "G5", "H5", "I5", "J5", "K5", "L5", "M5", "N5", "O5", "P5", "Q5", "R5", "S5", "T5", 
	"A6", "B6", "C6", "D6", "E6", "F6", "G6", "H6", "I6", "J6", "K6"
];
?>