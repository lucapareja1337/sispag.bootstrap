<?php
    /*
        funcao atribui valor do abono de acordo com o tempo de trabalho.
    */
    function _abono($_ttrabalho)
        {
            $_abono=0;

            if($_ttrabalho>4 && $_ttrabalho<=10)
                {
                    
                   return $_abono+=2000; 
                   dd($_abono);
                }
                
            else if($_ttrabalho>=20)
                {
                    return $_abono+=7500;
                }

            else
                {
                    return $_abono;
                }
            
        }
       
    /*
    esta funcao calcula o ajuste salarial,
    baseando-se no tempo de trabalho,
    quantidade de filhos e salario.
    */
    function _ajuste($_ttrabalho,$_filhos,$_salario)
        {
            $_ajuste=0;

            if($_ttrabalho>=20 && $_filhos>=2)
                {
                    return $_ajuste= $_salario*($_filhos*$_ttrabalho)/55;
                }
            else if($_ttrabalho<=19 && $_filhos<=1)
                {
                    return $_ajuste=$_salario*($_filhos*$_ttrabalho)/65;
                }
            else
            {
                return $_ajuste= $_salario*1.03;
            }
        }
        

        /*
            esta funcao calcula o salario familia
        */

        function _salariofamilia($_filhos)
        {
            $_salariofamilia = $_filhos*70;

            return $_salariofamilia;
        }

        /*esta funcao calcula o inss */
        function _inss($_ttrabalho,$_salario)
        {   
            if($_ttrabalho>=25 || $_salario<6000)
            {
                return $_salario*0.84;
            }
            else if($_tttrabalho>30 || $salario>6000)
            {
                return $_salario*0.90;
            }

        }
    
?>