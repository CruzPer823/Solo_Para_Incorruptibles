<?php
declare(strict_types=1);

function uploadCurriculo(object $pdo, array $curriculo){
    $query = "INSERT INTO curriculo(ulgrado, insEdu, carrera, estatus, fecha, ubiIns, docName) VALUES (:ulgrado, :insEdu, :carrera, :estatus, :fecha, :ubiIns, :docName);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":ulgrado",$curriculo ["ulgrado"]);
    $stmt->bindParam(":insEdu",$curriculo ["insEdu"]);
    $stmt->bindParam(":carrera",$curriculo ["carrera"]);
    $stmt->bindParam(":estatus",$curriculo["estatus"]);
    $stmt->bindParam(":fecha",$curriculo["fecha"]);
    $stmt->bindParam(":ubiIns",$curriculo["ubiIns"]);
    $stmt->bindParam(":docName",$curriculo["fileName"]);
    $stmt->execute();
}
function uploadIngresos(object $pdo, array $ingresos){
    $query = "INSERT INTO ingresos(RemAct, inActInd, razSoc, tipNeg, ingActFin, insGan, ingProf, servPres,otrIng, espTip) VALUES (:RemAct, :inActInd, :razSoc, :tipNeg, :ingActFin, :insGan, :ingProf, :servPres,:otrIng, :espTip);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":RemAct",$ingresos ["RemAct"]);
    $stmt->bindParam(":inActInd",$ingresos ["inActInd"]);
    $stmt->bindParam(":razSoc",$ingresos ["razSoc"]);
    $stmt->bindParam(":tipNeg",$ingresos["tipNeg"]);
    $stmt->bindParam(":ingActFin",$ingresos["ingActFin"]);
    $stmt->bindParam(":insGan",$ingresos["insGan"]);
    $stmt->bindParam(":ingProf",$ingresos["ingProf"]);
    $stmt->bindParam(":servPres",$ingresos["servPres"]);
    $stmt->bindParam(":otrIng",$ingresos["otrIng"]);
    $stmt->bindParam(":espTip",$ingresos["espTip"]);
    $stmt->execute();
}
function uploadServPub(object $pdo, array $servicioPub){
    $query = "INSERT INTO serviciopublico(RemAct, inActInd, remNet, ingInd, razSoc, tipNeg, ingFin, insGan,ingProf, tipServ,ingEnaj,tipBienEnaj,otrIng,espIng) VALUES (:RemAct, :inActInd, :remNet, :ingInd, :razSoc, :tipNeg, :ingFin, :insGan,:ingProf, :tipServ,:ingEnaj,:tipBienEnaj,:otrIng,:espIng);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":RemAct",$servicioPub ["RemAct"]);
    $stmt->bindParam(":inActInd",$servicioPub ["inActInd"]);
    $stmt->bindParam(":remNet",$servicioPub ["remNet"]);
    $stmt->bindParam(":ingInd",$servicioPub ["ingInd"]);
    $stmt->bindParam(":razSoc",$servicioPub ["razSoc"]);
    $stmt->bindParam(":tipNeg",$servicioPub ["tipNeg"]);
    $stmt->bindParam(":ingFin",$servicioPub ["ingFin"]);
    $stmt->bindParam(":insGan",$servicioPub ["insGan"]);
    $stmt->bindParam(":ingProf",$servicioPub ["ingProf"]);
    $stmt->bindParam(":tipServ",$servicioPub ["tipSer"]);
    $stmt->bindParam(":ingEnaj",$servicioPub ["ingEnaj"]);
    $stmt->bindParam(":tipBienEnaj",$servicioPub ["tipBienEnaj"]);
    $stmt->bindParam(":otrIng",$servicioPub ["otrIng"]);
    $stmt->bindParam(":espIng",$servicioPub ["espIng"]);
    $stmt->execute();
}
function uploadAspiracion(object $pdo, array $aspiracion){
    $query = "INSERT INTO aspiracion(cargo, detalles) VALUES (:cargo,:detalles);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":cargo",$aspiracion ["cargo"]);
    $stmt->bindParam(":detalles",$aspiracion ["detalles"]);
    $stmt->execute();
}
function uploadExpLab(object $pdo, array $experienciaLab){
    $query = "INSERT INTO experiencialaboral(secLab,nivGob,ambPub,nomEntPub,rfc,areaAds,emp,espFunPri,secPer,fecIng,fecEgr,ubi) VALUES (:secLab,:nivGob,:ambPub,:nomEntPub,:rfc,:areaAds,:emp,:espFunPri,:secPer,:fecIng,:fecEgr,:ubi);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":secLab",$experienciaLab ["secLab"]);
    $stmt->bindParam(":nivGob",$experienciaLab ["nivGob"]);
    $stmt->bindParam(":ambPub",$experienciaLab ["ambPub"]);
    $stmt->bindParam(":nomEntPub",$experienciaLab ["nomEntPub"]);
    $stmt->bindParam(":rfc",$experienciaLab ["rfc"]);
    $stmt->bindParam(":areaAds",$experienciaLab ["areAds"]);
    $stmt->bindParam(":emp",$experienciaLab ["emp"]);
    $stmt->bindParam(":espFunPri",$experienciaLab ["espFunPri"]);
    $stmt->bindParam(":secPer",$experienciaLab ["secPer"]);
    $stmt->bindParam(":fecIng",$experienciaLab ["fecIng"]);
    $stmt->bindParam(":fecEgr",$experienciaLab ["fecEgr"]);
    $stmt->bindParam(":ubi",$experienciaLab ["ubi"]);    
    $stmt->execute();
}
function uploadBieInm(object $pdo, array $bienesInm){
    $query = "INSERT INTO bienesinmuebles(bien,porProp,sup,supCons,terc,nomTer,rfcTerr,formAdq,formPag,trans,relTrans,valAdqTer,docVal,tipMon,adqInm,valAdq) VALUES (:bien,:porProp,:sup,:supCons,:terc,:nomTer,:rfcTerr,:formAdq,:formPag,:trans,:relTrans,:valAdqTer,:docVal,:tipMon,:adqInm,:valAdq);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":bien",$bienesInm["bien"]);
    $stmt->bindParam(":porProp",$bienesInm["porProp"]);
    $stmt->bindParam(":sup",$bienesInm["sup"]);
    $stmt->bindParam(":supCons",$bienesInm["supCons"]);
    $stmt->bindParam(":terc",$bienesInm["terc"]);
    $stmt->bindParam(":nomTer",$bienesInm["nomTer"]);
    $stmt->bindParam(":rfcTerr",$bienesInm["rfcTerr"]);
    $stmt->bindParam(":formAdq",$bienesInm["formAdq"]);
    $stmt->bindParam(":formPag",$bienesInm["formPag"]);
    $stmt->bindParam(":trans",$bienesInm["trans"]);
    $stmt->bindParam(":relTrans",$bienesInm["relTrans"]);
    $stmt->bindParam(":valAdqTer",$bienesInm["valAdqTer"]);
    $stmt->bindParam(":docVal",$bienesInm["docVal"]);
    $stmt->bindParam(":tipMon",$bienesInm["tipMon"]);
    $stmt->bindParam(":adqInm",$bienesInm["adqInm"]);
    $stmt->bindParam(":valAdq",$bienesInm["valAdq"]);
    $stmt->execute();
}
function uploadVehiculos(object $pdo, array $vehiculos){
    $query = "INSERT INTO vehiculos(tipVeh,marca,modelo,anio,entFed,pais,terCop,nomTer,frcTer,formAdq,formPag,valAdq,tipMo,adqVeh) VALUES (:tipVeh,:marca,:modelo,:anio,:entFed,:pais,:terCop,:nomTer,:frcTer,:formAdq,:formPag,:valAdq,:tipMo,:adqVeh);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tipVeh",$vehiculos["tipVeh"]);
    $stmt->bindParam(":marca",$vehiculos["marca"]);
    $stmt->bindParam(":modelo",$vehiculos["modelo"]);
    $stmt->bindParam(":anio",$vehiculos["anio"]);
    $stmt->bindParam(":entFed",$vehiculos["entFed"]);
    $stmt->bindParam(":pais",$vehiculos["pais"]);
    $stmt->bindParam(":terCop",$vehiculos["terCop"]);
    $stmt->bindParam(":nomTer",$vehiculos["nomTer"]);
    $stmt->bindParam(":frcTer",$vehiculos["frcTer"]);
    $stmt->bindParam(":formAdq",$vehiculos["formAdq"]);
    $stmt->bindParam(":formPag",$vehiculos["formPag"]);
    $stmt->bindParam(":valAdq",$vehiculos["valAdq"]);
    $stmt->bindParam(":tipMo",$vehiculos["tipMo"]);
    $stmt->bindParam(":adqVeh",$vehiculos["adqVeh"]);
    $stmt->execute();
}
function uploadBieMue(object $pdo, array $bienesMue){
    $query = "INSERT INTO bienesmuebles(tipBie,razSoc,terc,nomTer,rfcTer,descGen,formAdq,tipMo,adqBie) VALUES (:tipBie,:razSoc,:terc,:nomTer,:rfcTer,:descGen,:formAdq,:tipMo,:adqBie);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tipBie",$bienesMue["tipBie"]);
    $stmt->bindParam(":razSoc",$bienesMue["razSoc"]);
    $stmt->bindParam(":terc",$bienesMue["terc"]);
    $stmt->bindParam(":nomTer",$bienesMue["nomTer"]);
    $stmt->bindParam(":rfcTer",$bienesMue["rfcTer"]);
    $stmt->bindParam(":descGen",$bienesMue["descGen"]);
    $stmt->bindParam(":formAdq",$bienesMue["formAdq"]);
    $stmt->bindParam(":tipMo",$bienesMue["tipMo"]);
    $stmt->bindParam(":adqBie",$bienesMue["adqBie"]);
    $stmt->execute();
}
function uploadInv(object $pdo, array $inversiones){
    $query = "INSERT INTO inversiones(tipInv,banc,terc,nomTerc,rfcTer,ubiInv,inst,rfc,paiLoca,tieFond,orgProv,tiePosMon,tieSeg,tieVal,tieAfo) VALUES (:tipInv,:banc,:terc,:nomTerc,:rfcTer,:ubiInv,:inst,:rfc,:paiLoca,:tieFond,:orgProv,:tiePosMon,:tieSeg,:tieVal,:tieAfo);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tipInv",$inversiones["tipInv"]);
    $stmt->bindParam(":banc",$inversiones["banc"]);
    $stmt->bindParam(":terc",$inversiones["terc"]);
    $stmt->bindParam(":nomTerc",$inversiones["nomTer"]);
    $stmt->bindParam(":rfcTer",$inversiones["rfcTer"]);
    $stmt->bindParam(":ubiInv",$inversiones["ubiInv"]);
    $stmt->bindParam(":inst",$inversiones["inst"]);
    $stmt->bindParam(":rfc",$inversiones["rfc"]);
    $stmt->bindParam(":paiLoca",$inversiones["paiLoca"]);
    $stmt->bindParam(":tieFond",$inversiones["tieFond"]);
    $stmt->bindParam(":orgProv",$inversiones["orgProv"]);
    $stmt->bindParam(":tiePosMon",$inversiones["tiePosMon"]);
    $stmt->bindParam(":tieSeg",$inversiones["tieSeg"]);
    $stmt->bindParam(":tieVal",$inversiones["tieVal"]);
    $stmt->bindParam(":tieAfo",$inversiones["tieAfo"]);
    $stmt->execute();
}
function uploadAde(object $pdo, array $adeudos){
    $query = "INSERT INTO adeudos(tipAde,adqAde,montAde,tipMon,tieCod,ter,nomTer,rfcTer,otoCre,ubiAde) VALUES (:tipAde,:adqAde,:montAde,:tipMon,:tieCod,:ter,:nomTer,:rfcTer,:otoCre,:ubiAde);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tipAde",$adeudos["tipAde"]);
    $stmt->bindParam(":adqAde",$adeudos["adqAde"]);
    $stmt->bindParam(":montAde",$adeudos["montAde"]);
    $stmt->bindParam(":tipMon",$adeudos["tipMon"]);
    $stmt->bindParam(":tieCod",$adeudos["tieCod"]);
    $stmt->bindParam(":ter",$adeudos["ter"]);
    $stmt->bindParam(":nomTer",$adeudos["nomTer"]);
    $stmt->bindParam(":rfcTer",$adeudos["rfcTer"]);
    $stmt->bindParam(":otoCre",$adeudos["otoCre"]);
    $stmt->bindParam(":ubiAde",$adeudos["ubiAde"]);
    $stmt->execute();
}
function uploadPres(object $pdo, array $prestamos){
    $query = "INSERT INTO prestamos(tipBie,inmu,vehi,marc,model,anio,numSer,ubiRegi) VALUES (:tipBie,:inmu,:vehi,:marc,:model,:anio,:numSer,:ubiRegi);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tipBie",$prestamos["tipBie"]);
    $stmt->bindParam(":inmu",$prestamos["inmu"]);
    $stmt->bindParam(":vehi",$prestamos["vehi"]);
    $stmt->bindParam(":marc",$prestamos["marc"]);
    $stmt->bindParam(":model",$prestamos["mod"]);
    $stmt->bindParam(":anio",$prestamos["Anio"]);
    $stmt->bindParam(":numSer",$prestamos["numSer"]);
    $stmt->bindParam(":ubiRegi",$prestamos["ubiRegi"]);
    $stmt->execute();
}
function uploadInt(object $pdo, array $participacionEmp){
    $query = "INSERT INTO participacionempresas(decl,nombEmp,rfc,porcPart,tipPart,remPart,montMens,ubi,entFed,ubiPais,sectProd) VALUES (:decl,:nombEmp,:rfc,:porcPart,:tipPart,:remPart,:montMens,:ubi,:entFed,:ubiPais,:sectProd);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":decl",$participacionEmp["dec"]);
    $stmt->bindParam(":nombEmp",$participacionEmp["nombEmp"]);
    $stmt->bindParam(":rfc",$participacionEmp["rfc"]);
    $stmt->bindParam(":porcPart",$participacionEmp["porcPart"]);
    $stmt->bindParam(":tipPart",$participacionEmp["tipPart"]);
    $stmt->bindParam(":remPart",$participacionEmp["remPart"]);
    $stmt->bindParam(":montMens",$participacionEmp["montMens"]);
    $stmt->bindParam(":ubi",$participacionEmp["ubi"]);
    $stmt->bindParam(":entFed",$participacionEmp["entFed"]);
    $stmt->bindParam(":ubiPais",$participacionEmp["ubiPais"]);
    $stmt->bindParam(":sectProd",$participacionEmp["sectProd"]);
    $stmt->execute();
}

function uploadInt2(object $pdo, array $desicionesInst){
    $query = "INSERT INTO desicionesinst(decl,tipIns,pues,iniPart,rem,montMens,ubi,entFed) VALUES (:decl,:tipIns,:pues,:iniPart,:rem,:montMens,:ubi,:entFed);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":decl",$desicionesInst["dec"]);
    $stmt->bindParam(":tipIns",$desicionesInst["tipIns"]);
    $stmt->bindParam(":pues",$desicionesInst["pues"]);
    $stmt->bindParam(":iniPart",$desicionesInst["iniPart"]);
    $stmt->bindParam(":rem",$desicionesInst["rem"]);
    $stmt->bindParam(":montMens",$desicionesInst["montMens"]);
    $stmt->bindParam(":ubi",$desicionesInst["ubi"]);
    $stmt->bindParam(":entFed",$desicionesInst["entFed"]);
    $stmt->execute();
}
function uploadApy(object $pdo, array $apoyosPub){
    $query = "INSERT INTO apoyos(benPro,nomPro,insApo,nivGov,tipApo,recApo,montApro,espApo) VALUES (:benPro,:nomPro,:insApo,:nivGov,:tipApo,:recApo,:montApro,:espApo);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":benPro",$apoyosPub["benPro"]);
    $stmt->bindParam(":nomPro",$apoyosPub["nomPro"]);
    $stmt->bindParam(":insApo",$apoyosPub["insApo"]);
    $stmt->bindParam(":nivGov",$apoyosPub["nivGob"]);
    $stmt->bindParam(":tipApo",$apoyosPub["tipApo"]);
    $stmt->bindParam(":recApo",$apoyosPub["recApo"]);
    $stmt->bindParam(":montApro",$apoyosPub["montApro"]);
    $stmt->bindParam(":espApo",$apoyosPub["espApo"]);

    $stmt->execute();
}
function uploadRep(object $pdo, array $representacion){
    $query = "INSERT INTO representacion(decl,tipRep,iniRep,rep,razSocRep,rrfcRep,remRep,montRep,ubi,entFed,secProd) VALUES (:decl,:tipRep,:iniRep,:rep,:razSocRep,:rrfcRep,:remRep,:montRep,:ubi,:entFed,:secProd);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":decl",$representacion["dec"]);
    $stmt->bindParam(":tipRep",$representacion["tipRep"]);
    $stmt->bindParam(":iniRep",$representacion["iniRep"]);
    $stmt->bindParam(":rep",$representacion["rep"]);
    $stmt->bindParam(":razSocRep",$representacion["razSocRep"]);
    $stmt->bindParam(":rrfcRep",$representacion["rrfcRep"]);
    $stmt->bindParam(":remRep",$representacion["remRep"]);
    $stmt->bindParam(":montRep",$representacion["montRep"]);
    $stmt->bindParam(":ubi",$representacion["ubi"]);
    $stmt->bindParam(":entFed",$representacion["entFed"]);
    $stmt->bindParam(":secProd",$representacion["secProd"]);
    $stmt->execute();
}

function uploadCli(object $pdo, array $clientesPrin){
    $query = "INSERT INTO clientes(actLuc,decl,rfc,cliPrin,razSoc,rfcCli,sectProd,montApro,ubi,entFed,nomEmp) VALUES (:actLuc,:decl,:rfc,;cliPrin,:razSoc,:rfcCli,:sectProd,:montApro,:ubi,:entFed,:nomEmp);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":actLuc",$clientesPrin["actLuc"]);
    $stmt->bindParam(":decl",$clientesPrin["dec"]);
    $stmt->bindParam(":rfc",$clientesPrin["rfc"]);
    $stmt->bindParam(":cliPrin",$clientesPrin["cliPrin"]);
    $stmt->bindParam(":razSoc",$clientesPrin["razSoc"]);
    $stmt->bindParam(":rfcCli",$clientesPrin["rfcCli"]);
    $stmt->bindParam(":sectProd",$clientesPrin["sectProd"]);
    $stmt->bindParam(":montApro",$clientesPrin["montApro"]);
    $stmt->bindParam(":ubi",$clientesPrin["ubi"]);
    $stmt->bindParam(":entFed",$clientesPrin["entFed"]);
    $stmt->bindParam(":nomEmp",$clientesPrin["nomEmp"]);
   
    $stmt->execute();
}
function uploadBenfPri(object $pdo, array $benefPriv){
    $query = "INSERT INTO beneficiosprivados(tipBen,benef,oto,razSoc,rfc,formRece,espBen,montMnes,tipMon,sectProd) VALUES (:tipBen,:benef,:oto,:razSoc,:rfc,:formRece,:espBen,:montMnes,:tipMon,:sectProd);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":tipBen",$benefPriv["tipBen"]);
    $stmt->bindParam(":benef",$benefPriv["benef"]);
    $stmt->bindParam(":oto",$benefPriv["oto"]);
    $stmt->bindParam(":razSoc",$benefPriv["razSoc"]);
    $stmt->bindParam(":rfc",$benefPriv["rfc"]);
    $stmt->bindParam(":formRece",$benefPriv["formRece"]);
    $stmt->bindParam(":espBen",$benefPriv["espBen"]);
    $stmt->bindParam(":montMnes",$benefPriv["montMnes"]);
    $stmt->bindParam(":tipMon",$benefPriv["tipMon"]);
    $stmt->bindParam(":sectProd",$benefPriv["sectProd"]);
   
    $stmt->execute();
}

function uploadFidei(object $pdo, array $fidei){
    $query = "INSERT INTO fideicomisos(partFide,tipo,tipPart,rfc,fide,razSocFideicomitente,razSocfidu,rfcFide,razFidu,rfcFidu,razSocFideicomisario,rfcFidei,secProd,ubiFide) VALUES (:partFide,:tipo,:tipPart,:rfc,:fide,:razSocFideicomitente,:razSocfidu,:rfcFide,:razFidu,:rfcFidu,:razSocFideicomisario,:rfcFidei,:secProd,:ubiFide);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":partFide",$fidei["partFide"]);
    $stmt->bindParam(":tipo",$fidei["tipo"]);
    $stmt->bindParam(":tipPart",$fidei["tipPart"]);
    $stmt->bindParam(":rfc",$fidei["rfc"]);
    $stmt->bindParam(":fide",$fidei["fide"]);
    $stmt->bindParam(":razSocFideicomitente",$fidei["razSocfide"]);
    $stmt->bindParam(":razSocfidu",$fidei["razSocfidu"]);
    $stmt->bindParam(":rfcFide",$fidei["rfcFide"]);
    $stmt->bindParam(":razFidu",$fidei["razFidu"]);
    $stmt->bindParam(":rfcFidu",$fidei["rfcFidu"]);
    $stmt->bindParam(":razSocFideicomisario",$fidei["razSocFide"]);
    $stmt->bindParam(":rfcFidei",$fidei["rfcFidei"]);
    $stmt->bindParam(":secProd",$fidei["secProd"]);
    $stmt->bindParam(":ubiFide",$fidei["ubiFide"]);
  
   
    $stmt->execute();
}

function uploadFis(object $pdo, array $declaFis){
    $query = "INSERT INTO declaracionfiscal(opiSat,opiNoSat) VALUES (:opiSat,:opiNoSat);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":opiSat",$declaFis["opiSat"]);
    $stmt->bindParam(":opiNoSat",$declaFis["opiNoSat"]);
   
    $stmt->execute();
}

function uploadProp(object $pdo, array $adi){
    $query = "INSERT INTO propuestas(prop,extra) VALUES (:prop,:extra);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":prop",$adi["prop"]);
    $stmt->bindParam(":extra",$adi["extra"]);
   
    $stmt->execute();
}
//COMIENZA A PARTIR DEL 14, NO OLVIDES QUITAR EL NULL POR DEFAULT


function uploadAll(object $pdo, array $inicio){
    $query = "INSERT INTO candidatos(nombre, partido, correo, picName) VALUES (:nombre,:partido,:correo,:picName);";
    $stmt = $pdo->prepare($query);
    
    $stmt->bindParam(":nombre",$inicio["nombre"]);
    $stmt->bindParam(":partido",$inicio["partido"]);
    $stmt->bindParam(":correo",$inicio["correo"]);
    $stmt->bindParam(":picName",$inicio["picName"]);
    $stmt->execute();
}