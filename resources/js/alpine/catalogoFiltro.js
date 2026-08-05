export default () => ({


    /* ==========================================================
        FILTRO DO CATÁLOGO
    ========================================================== */


    categoriaSelecionada: null,


    subcategoriaSelecionada: null,





    /* ==========================================================
        SELECIONAR CATEGORIA
    ========================================================== */


    selecionarCategoria(categoria){


        this.categoriaSelecionada = categoria;


        this.subcategoriaSelecionada = null;


    },





    /* ==========================================================
        SELECIONAR SUBCATEGORIA
    ========================================================== */


    selecionarSubcategoria(categoria, subcategoria){


        this.categoriaSelecionada = categoria;


        this.subcategoriaSelecionada = subcategoria;


    },





    /* ==========================================================
        LIMPAR FILTRO
    ========================================================== */


    limparFiltro(){


        this.categoriaSelecionada = null;


        this.subcategoriaSelecionada = null;


    },


});