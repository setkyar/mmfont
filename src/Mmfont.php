<?php namespace SetKyar\Mmfont;

class Mmfont
{
	public function uni2zg1($unicode='')
	{
		$rule = [
	      ["from" => "\u1004\u103A\u1039","to" =>"\u1064"],
	      ["from" => "\u1039\u1010\u103D","to" =>"\u1096"],
	      ["from" => "\u1014(?=[\u1030\u103D\u103E\u102F\u1039])","to" =>"\u108F"],
	      ["from" => "\u102B\u103A","to" =>"\u105A"],
	      ["from" => "\u100B\u1039\u100C","to" =>"\u1092"],
	      ["from" => "\u102D\u1036","to" =>"\u108E"],
	      ["from" => "\u104E\u1004\u103A\u1038","to" =>"\u104E"],
	      ["from" => "[\u1025\u1009](?=[\u1039\u102F\u1030])","to" =>"\u106A"],
	      ["from" => "[\u1025\u1009](?=[\u103A])","to" =>"\u1025"],
	      ["from" => "\u100A(?=[\u1039\u102F\u1030\u103D])","to" =>"\u106B"],
	      ["from" => "(\u1039[\u1000-\u1021])\u102F","to" =>"$1\u1033"],
	      ["from" => "(\u1039[\u1000-\u1021])\u1030","to" =>"$1\u1034"],
	      ["from" => "\u1039\u1000","to" =>"\u1060"],
	      ["from" => "\u1039\u1001","to" =>"\u1061"],
	      ["from" => "\u1039\u1002","to" =>"\u1062"],
	      ["from" => "\u1039\u1003","to" =>"\u1063"],
	      ["from" => "\u1039\u1005","to" =>"\u1065"],
	      ["from" => "\u1039\u1007","to" =>"\u1068"],
	      ["from" => "\u1039\u1008","to" =>"\u1069"],
	      ["from" => "\u100A(?=[\u1039\u102F\u1030])","to" =>"\u106B"],
	      ["from" => "\u1039\u100B","to" =>"\u106C"],
	      ["from" => "\u1039\u100C","to" =>"\u106D"],
	      ["from" => "\u100D\u1039\u100D","to" =>"\u106E"],
	      ["from" => "\u100E\u1039\u100D","to" =>"\u106F"],
	      ["from" => "\u1039\u100F","to" =>"\u1070"],
	      ["from" => "\u1039\u1010","to" =>"\u1071"],
	      ["from" => "\u1039\u1011","to" =>"\u1073"],
	      ["from" => "\u1039\u1012","to" =>"\u1075"],
	      ["from" => "\u1039\u1013","to" =>"\u1076"],
	      ["from" => "\u1039\u1013","to" =>"\u1076"],
	      ["from" => "\u1039\u1014","to" =>"\u1077"],
	      ["from" => "\u1039\u1015","to" =>"\u1078"],
	      ["from" => "\u1039\u1016","to" =>"\u1079"],
	      ["from" => "\u1039\u1017","to" =>"\u107A"],
	      ["from" => "\u1039\u1018","to" =>"\u107B"],
	      ["from" => "\u1039\u1019","to" =>"\u107C"],
	      ["from" => "\u1039\u101C","to" =>"\u1085"],
	      ["from" => "\u103F","to" =>"\u1086"],
	      ["from" => "(\u103C)\u103E","to" =>"$1\u1087"],
	      ["from" => "\u103D\u103E","to" =>"\u108A"],
	      ["from" => "(\u1064)([\u1031]?)([\u103C]?)([\u1000-\u1021])\u102D","to" =>"$2$3$4\u108B"],
	      ["from" => "(\u1064)([\u1031]?)([\u103C]?)([\u1000-\u1021])\u102E","to" =>"$2$3$4\u108C"],
	      ["from" => "(\u1064)([\u1031]?)([\u103C]?)([\u1000-\u1021])\u1036","to" =>"$2$3$4\u108D"],
	      ["from" => "\u101B(?=[\u102F\u1030\u103D\u108A])","to" =>"\u1090"],
	      ["from" => "\u100F\u1039\u100D","to" =>"\u1091"],
	      ["from" => "\u100B\u1039\u100B","to" =>"\u1097"],
	      ["from" => "([\u1000-\u1021\u1029\u1090])([\u1060-\u1069\u106C\u106D\u1070-\u107C\u1085\u108A])?([\u103B-\u103E]*)?\u1031","to" =>"\u1031$1$2$3"],
	      ["from" => "([\u1000-\u1021\u1029])([\u1060-\u1069\u106C\u106D\u1070-\u107C\u1085])?(\u103C)","to" =>"$3$1$2"],
	      ["from" => "\u103A","to" =>"\u1039"],
	      ["from" => "\u103B","to" =>"\u103A"],
	      ["from" => "\u103C","to" =>"\u103B"],
	      ["from" => "\u103D","to" =>"\u103C"],
	      ["from" => "\u103E","to" =>"\u103D"],
	      ["from" => "\u103D\u102F","to" =>"\u1088"],
	      ["from" => "([\u102F\u1030\u1014\u101B\u103C\u108A\u103D\u1088])([\u1032\u1036][0,1])\u1037","to" =>"$1$2\u1095"],
	      ["from" => "\u102F\u1095","to" =>"\u102F\u1094"],
	      ["from" => "([\u1014\u101B])([\u1032\u1036\u102D\u102E\u108B\u108C\u108D\u108E])\u1037","to" =>"$1$2\u1095"],
	      ["from" => "\u1095\u1039","to" =>"\u1094\u1039"],
	      ["from" => "([\u103A\u103B])([\u1000-\u1021])\u102F","to" =>"$1$2\u1033"],
	      ["from" => "\u103A\u102F","to" =>"\u103A\u1033"],
	      ["from" => "\u103A([\u1036\u102D\u102E\u108B\u108C\u108D\u108E])\u102F","to" =>"\u103A$1\u1033"],
	      ["from" => "([\u103A\u103B])([\u1000-\u1021])\u1030","to" =>"$1$2\u1034"],
	      ["from" => "\u103A\u1030","to" =>"\u103A\u1034"],
	      ["from" => "\u103A([\u1036\u102D\u102E\u108B\u108C\u108D\u108E])\u1030","to" =>"\u103A$1\u1034"],
	      ["from" => "\u103D\u1030","to" =>"\u1089"],
	      ["from" => "\u103B([\u1000\u1003\u1006\u100F\u1010\u1011\u1018\u101A\u101C\u101A\u101E\u101F])","to" =>"\u107E$1"],
	      ["from" => "\u107E([\u1000\u1003\u1006\u100F\u1010\u1011\u1018\u101A\u101C\u101A\u101E\u101F])([\u103C\u108A])([\u1032\u1036\u102D\u102E\u108B\u108C\u108D\u108E])","to" =>"\u1084$1$2$3"],
	      ["from" => "\u107E([\u1000\u1003\u1006\u100F\u1010\u1011\u1018\u101A\u101C\u101A\u101E\u101F])([\u103C\u108A])","to" =>"\u1082$1$2"],
	      ["from" => "\u107E([\u1000\u1003\u1006\u100F\u1010\u1011\u1018\u101A\u101C\u101A\u101E\u101F])([\u1032\u1036\u102D\u102E\u108B\u108C\u108D\u108E])","to" =>"\u1080$1$2"],
	      ["from" => "\u103B([\u1000-\u1021])([\u103C\u108A])([\u1032\u1036\u102D\u102E\u108B\u108C\u108D\u108E])","to" =>"\u1083$1$2$3"],
	      ["from" => "\u103B([\u1000-\u1021])([\u103C\u108A])","to" =>"\u1081$1$2"],
	      ["from" => "\u103B([\u1000-\u1021])([\u1032\u1036\u102D\u102E\u108B\u108C\u108D\u108E])","to" =>"\u107F$1$2"],
	      ["from" => "\u103A\u103D","to" =>"\u103D\u103A"],
	      ["from" => "\u103A([\u103C\u108A])","to" =>"$1\u107D"]
	      ];

	    return Mmfont::replace_with_rule($rule,$unicode);
	}

	public function zg12uni($zawgyi='')
	{
		$rule = [
	      ["from" => "(\u103D|\u1087)","to" =>"\u103E"],
	      ["from" => "\u103C","to" =>"\u103D"],
	      ["from" => "(\u103B|\u107E|\u107F|\u1080|\u1081|\u1082|\u1083|\u1084)","to" =>"\u103C"],
	      ["from" => "(\u103A|\u107D)","to" =>"\u103B"],
	      ["from" => "\u1039","to" =>"\u103A"],
	      ["from" => "\u106A","to" =>"\u1009"],
	      ["from" => "\u106B","to" =>"\u100A"],
	      ["from" => "\u106C","to" =>"\u1039\u100B"],
	      ["from" => "\u106D","to" =>"\u1039\u100C"],
	      ["from" => "\u106E","to" =>"\u100D\u1039\u100D"],
	      ["from" => "\u106F","to" =>"\u100D\u1039\u100E"],
	      ["from" => "\u1070","to" =>"\u1039\u100F"],
	      ["from" => "(\u1071|\u1072)","to" =>"\u1039\u1010"],
	      ["from" => "\u1060","to" =>"\u1039\u1000"],
	      ["from" => "\u1061","to" =>"\u1039\u1001"],
	      ["from" => "\u1062","to" =>"\u1039\u1002"],
	      ["from" => "\u1063","to" =>"\u1039\u1003"],
	      ["from" => "\u1065","to" =>"\u1039\u1005"],
	      ["from" => "\u1068","to" =>"\u1039\u1007"],
	      ["from" => "\u1069","to" =>"\u1039\u1008"],
	      ["from" => "/(\u1073|\u1074)/g","to" =>"\u1039\u1011"],
	      ["from" => "\u1075","to" =>"\u1039\u1012"],
	      ["from" => "\u1076","to" =>"\u1039\u1013"],
	      ["from" => "\u1077","to" =>"\u1039\u1014"],
	      ["from" => "\u1078","to" =>"\u1039\u1015"],
	      ["from" => "\u1079","to" =>"\u1039\u1016"],
	      ["from" => "\u107A","to" =>"\u1039\u1017"],
	      ["from" => "\u107C","to" =>"\u1039\u1019"],
	      ["from" => "\u1085","to" =>"\u1039\u101C"],
	      ["from" => "\u1033","to" =>"\u102F"],
	      ["from" => "\u1034","to" =>"\u1030"],
	      ["from" => "\u103F","to" =>"\u1030"],
	      ["from" => "\u1086","to" =>"\u103F"],
	      ["from" => "\u1088","to" =>"\u103E\u102F"],
	      ["from" => "\u1089","to" =>"\u103E\u1030"],
	      ["from" => "\u108A","to" =>"\u103D\u103E"],
	      ["from" => "([\u1000-\u1021])\u1064","to" =>"\u1004\u103A\u1039$1"],
	      ["from" => "([\u1000-\u1021])\u108B","to" =>"\u1004\u103A\u1039$1\u102D"],
	      ["from" => "([\u1000-\u1021])\u108C","to" =>"\u1004\u103A\u1039$1\u102E"],
	      ["from" => "([\u1000-\u1021])\u108D","to" =>"\u1004\u103A\u1039$1\u1036"],
	      ["from" => "\u108E","to" =>"\u102D\u1036"],
	      ["from" => "\u108F","to" =>"\u1014"],
	      ["from" => "\u1090","to" =>"\u101B"],
	      ["from" => "\u1091","to" =>"\u100F\u1039\u1091"],
	      ["from" => "\u1019\u102C(\u107B|\u1093)","to" =>"\u1019\u1039\u1018\u102C"],
	      ["from" => "(\u107B|\u1093)","to" =>"\u103A\u1018"],
	      ["from" => "(\u1094|\u1095)","to" =>"\u1037"],
	      ["from" => "\u1096","to" =>"\u1039\u1010\u103D"],
	      ["from" => "\u1097","to" =>"\u100B\u1039\u100B"],
	      ["from" => "\u103C([\u1000-\u1021])([\u1000-\u1021])?","to" =>"$1\u103C$2"],
	      ["from" => "([\u1000-\u1021])\u103C\u103A","to" =>"\u103C$1\u103A"],
	      ["from" => "\u1031([\u1000-\u1021])(\u103E)?(\u103B)?","to" =>"$1$2$3\u1031"],
	      ["from" => "([\u1000-\u1021])\u1031(\u103B|\u103C|\u103D)","to" =>"$1$2\u1031"],
	      ["from" => "\u1032\u103D","to" =>"\u103D\u1032"],
	      ["from" => "\u103D\u103B","to" =>"\u103B\u103D"],
	      ["from" => "\u103A\u1037","to" =>"\u1037\u103A"],
	      ["from" => "\u102F(\u102D|\u102E|\u1036|\u1037)\u102F","to" =>"\u102F$1"],
	      ["from" => "\u102F\u102F","to" =>"\u102F"],
	      ["from" => "(\u102F|\u1030)(\u102D|\u102E)","to" =>"$2$1"],
	      ["from" => "(\u103E)(\u103B|\u1037)","to" =>"$2$1"],
	      ["from" => "\u1025(\u103A|\u102C)","to" =>"\u1009$1"],
	      ["from" => "\u1025\u102E","to" =>"\u1026"],
	      ["from" => "\u1005\u103B","to" =>"\u1008"],
	      ["from" => "\u1036(\u102F|\u1030)","to" =>"$1\u1036"],
	      ["from" => "\u1031\u1037\u103E","to" =>"\u103E\u1031\u1037"],
	      ["from" => "\u1031\u103E\u102C","to" =>"\u103E\u1031\u102C"],
	      ["from" => "\u105A","to" =>"\u102B\u103A"],
	      ["from" => "\u1031\u103B\u103E","to" =>"\u103B\u103E\u1031"],
	      ["from" => "(\u102D|\u102E)(\u103D|\u103E)","to" =>"$2$1"],
	      ["from" => "\u102C\u1039([\u1000-\u1021])","to" =>"\u1039$1\u102C"],
	      ["from" => "\u103C\u1004\u103A\u1039([\u1000-\u1021])","to" =>"\u1004\u103A\u1039$1\u103C"],
	      ["from" => "\u1039\u103C\u103A\u1039([\u1000-\u1021])","to" =>"\u103A\u1039$1\u103C"],
	      ["from" => "\u103C\u1039([\u1000-\u1021])","to" =>"\u1039$1\u103C"],
	      ["from" => "\u1036\u1039([\u1000-\u1021])","to" =>"\u1039$1\u1036"],
	      ["from" => "\u1092","to" =>"\u100B\u1039\u100C"],
	      ["from" => "\u104E","to" =>"\u104E\u1004\u103A\u1038"],
	      ["from" => "\u1040(\u102B|\u102C|\u1036)","to" =>"\u101D$1"],
	      ["from" => "\u1025\u1039","to" =>"\u1009\u1039"]
	      ];
	      return Mmfont::replace_with_rule($rule,$zawgyi);
	}

	public function replace_with_rule($rule,$output) {
	    $max_loop = count($rule);
	    for($i=0; $i < $max_loop; $i++) {
	      $data = $rule[$i];
	      $from = "~".json_decode('"'.$data["from"].'"')."~u";
	      $to = json_decode('"'.$data["to"].'"');
	      $output = preg_replace($from,$to,$output);
	    }
	    return $output;
	}
}