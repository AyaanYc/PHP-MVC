<?php
    $score = 0;
    print "점수 : $score <br>";
    switch($score)
    {
        case 90: case 91: case 92: case 93:
            print "A-";
            break;
        
        case 94: case 95: case 96:
            print "A";
            break;

        case 97: case 98: case 99: case 100:
            print "A+";
            break;
        
        case 80: case 81: case 82: case 83:
            print "B-";
            break;
        
        case 84: case 85: case 86:
            print "B";
            break;      
            
        case 87: case 88: case 89:
            print "B+";
            break;            

        case 70: case 71: case 72: case 73:
            print "C-";
            break;

        case 74: case 75: case 76:
            print "C";
            break;

        case 77: case 78: case 79:
            print "C+";
            break;
            
        case 60: case 61: case 62: case 63:
            print "D-";
            break;

        case 64: case 65: case 66:
            print "D";
            break;

        case 67: case 68: case 69:
            print "D+";
            break;

        case ($score < 60 && $score >= 1):
            print "F";
            break;

        default :
            print "잘못된 값";
            break;
    }
?>
