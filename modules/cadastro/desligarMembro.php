<?

session_cache_limiter("nocache");
session_cache_expire(999);
session_start();

include_once "{$_SERVER["DOCUMENT_ROOT"]}/membrezia/source/dao/MembroDAO.php";
include_once "{$_SERVER["DOCUMENT_ROOT"]}/membrezia/source/modelo/Membro.php";

$membroDAO = new MembroDAO();
$membro = new Membro();

$membro->setId(filter_input(INPUT_POST, "id"));
$membro->setSituacao(Membro::DESLIGADO);

if ($membroDAO->desligar($membro)) {
    echo "TRUE";
} else {
    echo "FALSE";
}
?>  