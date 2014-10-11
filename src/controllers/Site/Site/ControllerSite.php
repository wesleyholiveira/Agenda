<?php
namespace Site\Site;
use Silex\Application;
use Site\Site\CommandSite;
use Command\CommandContext;
class ControllerSite
{  
  private $command;
  private $context;

  public function __construct(CommandSite $cmd, CommandContext $context)
  {
    $this->command = $cmd;
    $this->context = $context;
  } 
     
  public function index()
  {
    $this->context->set('index');
    return $this->command->execute($this->context);
  }
  public function inicio()
  {
    $this->context->set('inicio');
    return $this->command->execute($this->context);
  }
  public function login()
  {
    $this->context->set('login');
    return $this->command->execute($this->context);
  }

  //regras novas eficiencia financeira, inseridas 31-03-2014
  public function regrasEf1()
  {
    $this->context->set('regrasEf1');
    return $this->command->execute($this->context); 
  }
  public function regrasEf2()
  {
    $this->context->set('regrasEf2');
    return $this->command->execute($this->context); 
  }
  public function regrasEf3()
  {
    $this->context->set('regrasEf3');
    return $this->command->execute($this->context); 
  }
  public function regrasEf4()
  {
    $this->context->set('regrasEf4');
    return $this->command->execute($this->context); 
  }
  public function regrasEf5()
  {
    $this->context->set('regrasEf5');
    return $this->command->execute($this->context); 
  }
  public function regrasEf6()
  {
    $this->context->set('regrasEf6');
    return $this->command->execute($this->context); 
  }
  public function regrasEf7()
  {
    $this->context->set('regrasEf7');
    return $this->command->execute($this->context); 
  }
  public function regrasEf8()
  {
    $this->context->set('regrasEf8');
    return $this->command->execute($this->context); 
  }
  public function regrasEf9()
  {
    $this->context->set('regrasEf9');
    return $this->command->execute($this->context); 
  }
  public function regrasEf10()
  {
    $this->context->set('regrasEf10');
    return $this->command->execute($this->context); 
  }  
  public function regrasEf11()
  {
    $this->context->set('regrasEf11');
    return $this->command->execute($this->context); 
  }
  public function regrasEf12()
  {
    $this->context->set('regrasEf12');
    return $this->command->execute($this->context); 
  }
  public function regrasEf13()
  {
    $this->context->set('regrasEf13');
    return $this->command->execute($this->context); 
  }
  public function regrasEf14()
  {
    $this->context->set('regrasEf14');
    return $this->command->execute($this->context); 
  }
  /***********************************************/
  //rotas novas eficiencia financeira 02-04-2014
  public function jogosEfSerieA()
  {
    $this->context->set('jogosEfSerieA');
    return $this->command->execute($this->context);
  }
  public function classificacaoEfSerieA()
  {
    $this->context->set('classificacaoEfSerieA');
    return $this->command->execute($this->context);
  }

  public function jogosEfSerieB()
  {
    $this->context->set('jogosEfSerieB');
    return $this->command->execute($this->context);
  }
  public function classificacaoEfSerieB()
  {
    $this->context->set('classificacaoEfSerieB');
    return $this->command->execute($this->context);
  }
  /**********************************************/
  
  //rotas novas campeonato faturamento 02-04-2014
  public function campeonatoFaturamento()
  {
    $this->context->set('campeonatoFaturamento');
    return $this->command->execute($this->context); 
  }
  public function galeria()
  {
    $this->context->set('galeria');
    return $this->command->execute($this->context); 
  }
  public function faturamentoInicio()
  {
    $this->context->set('faturamentoInicio');
    return $this->command->execute($this->context); 
  }
  public function classificacaoFaturamentoSerieA()
  {
    $this->context->set('classificacaoFaturamentoSerieA');
    return $this->command->execute($this->context); 
  }
  public function classificacaoFaturamentoSerieB()
  {
    $this->context->set('classificacaoFaturamentoSerieB');
    return $this->command->execute($this->context); 
  }


  
  //navegacao campeonato ef
  public function campeonatoEf()
  {
    $this->context->set('campeonatoEf');
    return $this->command->execute($this->context);
  }
  public function regrasEf()
  {
    $this->context->set('regrasEf');
    return $this->command->execute($this->context);
  }
  public function regrasSerieAEf()
  {
    $this->context->set('regrasSerieAEf');
    return $this->command->execute($this->context);
  }
  public function regras1SerieAEf()
  {
    $this->context->set('regras1SerieAEf');
    return $this->command->execute($this->context); 
  }
  public function regras2SerieAEf()
  {
    $this->context->set('regras2SerieAEf');
    return $this->command->execute($this->context); 
  }

  public function regrasSerieBEf()
  {
    $this->context->set('regrasSerieBEf');
    return $this->command->execute($this->context);
  }
  public function premiacoesEf()
  {
    $this->context->set('premiacoesEf');
    return $this->command->execute($this->context); 
  }
  public function ganhadoresEf()
  {
    $this->context->set('ganhadoresEf');
    return $this->command->execute($this->context); 
  }
  public function listarganhadoresEfPorLoja($loja)
  {
    $this->context->set('listarganhadoresEfPorLoja');
    $this->context->param(array('loja' => $loja ));
    return $this->command->execute($this->context); 
  }
  public function ganhadoresDestqueEf()
  {
    $this->context->set('ganhadoresDestaqueEf');
    return $this->command->execute($this->context); 
  }
  //rota ganhadores destaque Teste 14-04-2014 > alterado 15-04-2014
  public function ganhadoresDestqueEfTeste()
  {
    $this->context->set('ganhadoresDestaqueEfTeste');
    return $this->command->execute($this->context); 
  }
  public function ganhadoresMesSemana($mes, $semana)
  {
    $this->context->set('ganhadoresMesSemana');
    $this->context->param(array('mes' => $mes, 'semana' => $semana));
    return $this->command->execute($this->context); 
  }
  /***************************************************************/
  public function jogosEf()
  {
    $this->context->set('jogosEf');
    return $this->command->execute($this->context); 
  }
  public function todosJogos()
  {
    $this->context->set('todosJogosEf');
    return $this->command->execute($this->context); 
  }
  public function listarJogos($loja, $grupo, $subGrupo)
  {
    $this->context->set('listarJogos');
    $this->context->param(array('loja' => $loja, 
                                'grupo' => $grupo, 
                                'subGrupo' => $subGrupo
                               ));
    return $this->command->execute($this->context); 
  }
  public function listarPontosJogos($id)
  {
    $this->context->set('listarPontosJogos');
    $this->context->param(array('id' => $id));
    return $this->command->execute($this->context); 
  }
  

  public function classificacaoEf()
  {
    $this->context->set('classificacaoEf');
    return $this->command->execute($this->context); 
  }
  public function classificacaoGrupoEf($grupo)
  {
    $this->context->set('classificacaoGrupoEf');
    $this->context->param(array('grupo' => $grupo));
    return $this->command->execute($this->context); 
  }


  //ROTAS cupom 06-04-2014
  public function cadastroCupom()
  {
    $this->context->set('cadastroCupom');
    return $this->command->execute($this->context); 
  }
  public function listarCupomCodVendedor($codVendedor)
  {
    $this->context->set('listarCupomCodVendedor');
    $this->context->param(array('codVendedor' => $codVendedor));
    return $this->command->execute($this->context); 
  }
  public function listarDetalhesCupom($codVendedor)
  {
    $this->context->set('listarDetalhesCupom');
    $this->context->param(array('codVendedor' => $codVendedor));
    return $this->command->execute($this->context); 
  }
  //rotas de teste cupom
  public function cadastroCupomTeste()
  {
    $this->context->set('cadastroCupomTeste');
    return $this->command->execute($this->context); 
  }
  public function listarCupomCodVendedorTeste($codVendedor)
  {
    $this->context->set('listarCupomCodVendedorTeste');
    $this->context->param(array('codVendedor' => $codVendedor));
    return $this->command->execute($this->context); 
  }
  public function listarDetalhesCupomTeste($codVendedor)
  {
    $this->context->set('listarDetalhesCupomTeste');
    $this->context->param(array('codVendedor' => $codVendedor));
    return $this->command->execute($this->context); 
  }
  /*********************************************/
  /*********************************************/
  
  //navegacao faturamento
  public function faturamento()
  {
    $this->context->set('faturamento');
    return $this->command->execute($this->context);
  }
  public function regrasFaturamento()
  {
    $this->context->set('regrasFaturamento');
    return $this->command->execute($this->context);
  }
  public function premiacoesFaturamento()
  {
    $this->context->set('premiacoesFaturamento');
    return $this->command->execute($this->context); 
  }
  public function premiacaoGerenteFaturamento()
  {
    $this->context->set('premiacaoGerenteFaturamento');
    return $this->command->execute($this->context); 
  }
  public function premiacaoBimestralVendedoresFaturamento()
  {
    $this->context->set('premiacaoBimestralVendedoresFaturamento');
    return $this->command->execute($this->context);  
  }
  public function premiacaoBimestralGerentesFaturamento()
  {
    $this->context->set('premiacaoBimestralGerentesFaturamento');
    return $this->command->execute($this->context);  
  }
  public function premiacaoBimestralGerentesRegionaisFaturamento()
  {
    $this->context->set('premiacaoBimestralGerentesRegionaisFaturamento');
    return $this->command->execute($this->context); 
  }
  public function ganhadoresFaturamento()
  {
    $this->context->set('ganhadoresFaturamento');
    return $this->command->execute($this->context);  
  }
  public function classificacaoFaturamento()
  {
    $this->context->set('classificacaoFaturamento');
    return $this->command->execute($this->context); 
  }
  public function classificacaoFaturamentoPorGrupo($grupo)
  {
    $this->context->set('classificacaoFaturamentoPorGrupo');
    $this->context->param(array('grupo' => $grupo));
    return $this->command->execute($this->context); 
  }

  //navegação resultados
  public function resultados()
  {
    $this->context->set('resultados');
    return $this->command->execute($this->context); 
  }

  //navegação comentarios
  public function cadastroComentarios()
  {
    $this->context->set('cadastroComentarios');
    return $this->command->execute($this->context); 
  }
  public function inserir($idFuncionario, $data, $mensagem)
  {
    $this->context->set('inserir');
    $this->context->param(array('idFuncionario' => $idFuncionario,
                                'data' => $data,
                                'mensagem' => $mensagem
                               )
                         );
    return $this->command->execute($this->context); 
  }
  public function comentariosSite()
  {
    $this->context->set('comentariosSite');
    return $this->command->execute($this->context); 
  }
  //fim navegação comentarios
  
  //navegação novidades
  public function novidades()
  {
    $this->context->set('novidades');
    return $this->command->execute($this->context); 
  }

  //navegação faq
  public function faq()
  {
    $this->context->set('faq');
    return $this->command->execute($this->context); 
  }

  //navegação noticias site
  public function noticia($id)
  {
    $this->context->set('noticia');
    $this->context->param(array('id' => $id));
    return $this->command->execute($this->context); 
  }

  public function sair()
  {
    $this->context->set('sair');
    $this->context->param(array('navegacao' => 'sair'));
    return $this->command->execute($this->context);
  }

}