<?php

class TO_Livro
{
    private $titulo_livro;
    private $autor_livro;
    private $isbn_livro;  
    private $desc_livro;  

    /**
     * Get the value of titulo_livro
     */ 
    public function getTitulo_livro()
    {
        return $this->titulo_livro;
    }

    /**
     * Set the value of titulo_livro
     *
     * @return  self
     */ 
    public function setTitulo_livro($titulo_livro)
    {
        $this->titulo_livro = $titulo_livro;

        return $this;
    }

    /**
     * Get the value of autor_livro
     */ 
    public function getAutor_livro()
    {
        return $this->autor_livro;
    }

    /**
     * Set the value of autor_livro
     *
     * @return  self
     */ 
    public function setAutor_livro($autor_livro)
    {
        $this->autor_livro = $autor_livro;

        return $this;
    }

    /**
     * Get the value of isbn_livro
     */ 
    public function getIsbn_livro()
    {
        return $this->isbn_livro;
    }

    /**
     * Set the value of isbn_livro
     *
     * @return  self
     */ 
    public function setIsbn_livro($isbn_livro)
    {
        $this->isbn_livro = $isbn_livro;

        return $this;
    }

    /**
     * Get the value of desc_livro
     */ 
    public function getDesc_livro()
    {
        return $this->desc_livro;
    }

    /**
     * Set the value of desc_livro
     *
     * @return  self
     */ 
    public function setDesc_livro($desc_livro)
    {
        $this->desc_livro = $desc_livro;

        return $this;
    }
}