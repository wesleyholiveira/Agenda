<?php
namespace Site\Site;
require ('ExeCommand.php');
use Exception;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Command\Command;
use Command\CommandContext;
use Site\View\View;
use Site\SiteDao;

class CommandSite implements Command
{
  public function __construct(View $view, SiteDao $dao, Application $app)
  {
    $this->view  = $view;
    $this->dao   = $dao;
    $this->app   = $app;
  }
  public function execute(CommandContext $context)
  {
    switch ($context->get()) 
    {
      case 'index':
        $context->param(array('dao' => $this->dao));
        return index($this->view, $context->getParam());     
      break;

      //regras novas eficiencia financeira inserida 31-03-2014
      case 'jogosEfSerieA':
        $context->param(array('dao' => $this->dao));
        return jogosEfSerieA($this->view, $context->getParam());     
      break;

      case 'classificacaoEfSerieA':
        $context->param(array('dao' => $this->dao));
        return classificacaoEfSerieA($this->view, $context->getParam());     
      break;

      case 'jogosEfSerieB':
        $context->param(array('dao' => $this->dao));
        return jogosEfSerieB($this->view, $context->getParam());     
      break;
      case 'classificacaoEfSerieB':
        $context->param(array('dao' => $this->dao));
        return classificacaoEfSerieB($this->view, $context->getParam());     
      break;
      
      
      case 'regrasEf1':
        $context->param(array('dao' => $this->dao));
        return regrasEf1($this->view, $context->getParam());     
      break;
      case 'regrasEf2':
        $context->param(array('dao' => $this->dao));
        return regrasEf2($this->view, $context->getParam());     
      break;
      case 'regrasEf3':
        $context->param(array('dao' => $this->dao));
        return regrasEf3($this->view, $context->getParam());     
      break;
      case 'regrasEf4':
        $context->param(array('dao' => $this->dao));
        return regrasEf4($this->view, $context->getParam());     
      break;
      case 'regrasEf5':
        $context->param(array('dao' => $this->dao));
        return regrasEf5($this->view, $context->getParam());     
      break;
      case 'regrasEf6':
        $context->param(array('dao' => $this->dao));
        return regrasEf6($this->view, $context->getParam());     
      break;
      case 'regrasEf7':
        $context->param(array('dao' => $this->dao));
        return regrasEf7($this->view, $context->getParam());     
      break;
      case 'regrasEf8':
        $context->param(array('dao' => $this->dao));
        return regrasEf8($this->view, $context->getParam());     
      break;
      case 'regrasEf9':
        $context->param(array('dao' => $this->dao));
        return regrasEf9($this->view, $context->getParam());     
      break;
      case 'regrasEf10':
        $context->param(array('dao' => $this->dao));
        return regrasEf10($this->view, $context->getParam());     
      break;
      case 'regrasEf11':
        $context->param(array('dao' => $this->dao));
        return regrasEf11($this->view, $context->getParam());     
      break;
      case 'regrasEf12':
        $context->param(array('dao' => $this->dao));
        return regrasEf12($this->view, $context->getParam());     
      break;
      case 'regrasEf13':
        $context->param(array('dao' => $this->dao));
        return regrasEf13($this->view, $context->getParam());     
      break;
      case 'regrasEf14':
        $context->param(array('dao' => $this->dao));
        return regrasEf14($this->view, $context->getParam());     
      break;
      /***************************************************/
      
      // rotas novas campeonato faturamento 02-04-2014
      case 'campeonatoFaturamento':
        $context->param(array('dao' => $this->dao));
        return campeonatoFaturamento($this->view, $context->getParam());     
      break; 
      case 'galeria':
        $context->param(array('dao' => $this->dao));
        return galeria($this->view, $context->getParam());     
      break;
      case 'faturamentoInicio':
        $context->param(array('dao' => $this->dao));
        return faturamentoInicio($this->view, $context->getParam());     
      break;  
      case 'classificacaoFaturamentoSerieA':
        $context->param(array('dao' => $this->dao));
        return classificacaoFaturamentoSerieA($this->view, $context->getParam());     
      break;
      case 'classificacaoFaturamentoSerieB':
        $context->param(array('dao' => $this->dao));
        return classificacaoFaturamentoSerieB($this->view, $context->getParam());     
      break;

      case 'inicio':
        $context->param(array('dao' => $this->dao));
        return inicio($this->view, $context->getParam());     
      break;

      case 'login':
        $context->param(array('dao' => $this->dao));
        return login($this->view, $context->getParam());     
      break;

      case 'campeonatoEf':
        $context->param(array('dao' => $this->dao));
        return campeonatoEf($this->view, $context->getParam());     
      break;

      case 'regrasEf':
        $context->param(array('dao' => $this->dao));
        return regrasEf($this->view, $context->getParam());     
      break;
      case 'regrasSerieAEf':
        $context->param(array('dao' => $this->dao));
        return regrasSerieAEf($this->view, $context->getParam());     
      break;
      case 'regras1SerieAEf':
        $context->param(array('dao' => $this->dao));
        return regras1SerieAEf($this->view, $context->getParam());     
      break;
      case 'regras2SerieAEf':
        $context->param(array('dao' => $this->dao));
        return regras2SerieAEf($this->view, $context->getParam());     
      break;

      case 'regrasSerieBEf':
        $context->param(array('dao' => $this->dao));
        return regrasSerieBEf($this->view, $context->getParam());     
      break;

      case 'premiacoesEf':
        $context->param(array('dao' => $this->dao));
        return premiacoesEf($this->view, $context->getParam());     
      break;

      case 'ganhadoresEf':
        $context->param(array('dao' => $this->dao));
        return ganhadoresEf($this->view, $context->getParam());
      break;

      case 'listarganhadoresEfPorLoja':
        $context->param(array('dao' => $this->dao));
        return listarganhadoresEfPorLoja($this->view, $context->getParam());
      break;
      
      case 'ganhadoresDestaqueEf':
         $context->param(array('dao' => $this->dao));
        return ganhadoresDestaqueEf($this->view, $context->getParam());
      break;
      
      //rotas de teste 14-04-2014 > alterada 15>04-2014
      case 'ganhadoresDestaqueEfTeste':
         $context->param(array('dao' => $this->dao));
        return ganhadoresDestaqueEfTeste($this->view, $context->getParam());
      break;
      
      case 'ganhadoresMesSemana':
         $context->param(array('dao' => $this->dao));
        return ganhadoresMesSemana($this->view, $context->getParam());
      break;

      
      case 'jogosEf':
        $context->param(array('dao' => $this->dao));
        return jogosEf($this->view, $context->getParam());     
      break;
      case 'listarJogos':
        $context->param(array('dao' => $this->dao));
        return listarJogos($this->view, $context->getParam());     
      break;
      case 'todosJogosEf':
        $context->param(array('dao' => $this->dao));
        return todosJogosEf($this->view, $context->getParam());
      break;
      case 'listarPontosJogos':
        $context->param(array('dao' => $this->dao));
        return listarPontosJogos($this->view, $context->getParam());     
      break;

      case 'classificacaoEf':
        $context->param(array('dao' => $this->dao));
        return classificacaoEf($this->view, $context->getParam());     
      break;
      case 'classificacaoGrupoEf':
        $context->param(array('dao' => $this->dao));
        return classificacaoGrupoEf($this->view, $context->getParam());     
      break;

      //rotas cupom 06-04-2014
      case 'cadastroCupom':
        $context->param(array('dao' => $this->dao));
        return cadastroCupom($this->view, $context->getParam());     
      break;

      case 'listarCupomCodVendedor':
        $context->param(array('dao' => $this->dao));
        return listarCupomCodVendedor($this->view, $context->getParam());     
      break;
      case 'listarDetalhesCupom':
        $context->param(array('dao' => $this->dao));
        return listarDetalhesCupom($this->view, $context->getParam());     
      break;
      //rotas de teste 11-04-2014
      case 'cadastroCupomTeste':
        $context->param(array('dao' => $this->dao));
        return cadastroCupomTeste($this->view, $context->getParam());     
      break;

      case 'listarCupomCodVendedorTeste':
        $context->param(array('dao' => $this->dao));
        return listarCupomCodVendedorTeste($this->view, $context->getParam());     
      break;
      case 'listarDetalhesCupomTeste':
        $context->param(array('dao' => $this->dao));
        return listarDetalhesCupomTeste($this->view, $context->getParam());     
      break;      
      /****************************************************************/
      /****************************************************************/

      case 'faturamento':
        $context->param(array('dao' => $this->dao));
        return faturamento($this->view, $context->getParam());     
      break;

      case 'regrasFaturamento':
        $context->param(array('dao' => $this->dao));
        return regrasFaturamento($this->view, $context->getParam());     
      break;

      case 'premiacoesFaturamento':
        $context->param(array('dao' => $this->dao));
        return premiacoesFaturamento($this->view, $context->getParam());
      break;
      case 'premiacaoGerenteFaturamento':
        $context->param(array('dao' => $this->dao));
        return premiacaoGerenteFaturamento($this->view, $context->getParam());
      break;
      case 'premiacaoBimestralVendedoresFaturamento':
        $context->param(array('dao' => $this->dao));
        return premiacaoBimestralVendedoresFaturamento($this->view, $context->getParam());
      break;
      case 'premiacaoBimestralGerentesFaturamento':
        $context->param(array('dao' => $this->dao));
        return premiacaoBimestralGerentesFaturamento($this->view, $context->getParam());
      break;
      case 'premiacaoBimestralGerentesRegionaisFaturamento':
        $context->param(array('dao' => $this->dao));
        return premiacaoBimestralGerentesRegionaisFaturamento($this->view, $context->getParam());
      break;
      case 'ganhadoresFaturamento':
        $context->param(array('dao' => $this->dao));
        return ganhadoresFaturamento($this->view, $context->getParam());
      break;



      case 'classificacaoFaturamento':
        $context->param(array('dao' => $this->dao));
        return classificacaoFaturamento($this->view, $context->getParam());
      break;
      case 'classificacaoFaturamentoPorGrupo':
        $context->param(array('dao' => $this->dao));
        return classificacaoFaturamentoPorGrupo($this->view, $context->getParam());
      break;

      case 'resultados':
        $context->param(array('dao' => $this->dao));
        return resultados($this->view, $context->getParam());
      break;

      /** Navegação comentários, insere, lista  **/
      case 'cadastroComentarios':
        $context->param(array('dao' => $this->dao));
        return cadastroComentarios($this->view, $context->getParam());
      break;
      case 'inserir':
        $context->param(array('dao' => $this->dao));
        return inserir($this->view, $context->getParam());
      break;
      case 'comentariosSite':
        $context->param(array('dao' => $this->dao));
        return comentariosSite($this->view, $context->getParam());
      break;
      //fim navegação comentarios

      case 'novidades':
        $context->param(array('dao' => $this->dao));
        return novidades($this->view, $context->getParam());
      break;

      case 'faq':
        $context->param(array('dao' => $this->dao));
        return faq($this->view, $context->getParam());
      break;

      case 'sair':
        $context->param(array('app' => $this->app, 'dao' => $this->dao));
        return sair($this->view, $context->getParam());
      break;

      //rota noticia 07-04-2014
      case 'noticia':
        $context->param(array('app' => $this->app, 'dao' => $this->dao));
        return noticia($this->view, $context->getParam());
      break;
    }
  } 
}