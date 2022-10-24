<?php
class Comentario{
    private id;
    private nome;
    private mensagem;
    private link;
    private comentarioCod;

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }

    function getCod(){
        return $this->cod;
    }
    function setCod($cod){
        $this->cod = $cod;
    }

    function getCNome(){
        return $this->nome;
    }
    function setCod($nome){
        $this->nome = $nome;
    }

    function getMensagem(){
        return $this->mensagem;
    }
    function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }

    function getLink(){
        return $this->link;
    }
    function setLink($link){
        $this->link = $link;
    }

    function getComentarioCod(){
        return $this->comentarioCod;
    }
    function setComentarioCod($comentarioCod){
        $this->comentarioCod = $comentarioCod;
    }

  
}
?>