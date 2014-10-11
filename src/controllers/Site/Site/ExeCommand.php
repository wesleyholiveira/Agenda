<?php
namespace Site\Site;
require __DIR__.'/../../../helper/verificaLogin.php';
use Exception;
use Uploads\UploadsEfDao;
session_start();
function index($view, $param = null)
{
	try
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => '',
                     "loja" => $loja
                    );    
    return $view->load('login', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => '', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('login', $content);  
  }   
}
function login($view, $param = null)
{
  try
  {
    
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'login',
                     "loja" => $loja
                    );    
    return $view->load('login', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'login', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('login', $content);  
  }   
}

//regras novas eficiencia financeira inserida 31-03-2014
function jogosEfSerieA($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'jogos-ef-serie-a',
                     "loja" => $loja,
                     "tabelaA" => $tabelaA
                    );    
    return $view->load('jogosEfSerieA', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-1', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('jogosEfSerieA', $content);  
  }   
}
function classificacaoEfSerieA($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $dados = new UploadsEfDao();
    $tabela = $dados->listarTabelaJogosA();
    $content = array("navegacao" => 'classificacao-ef-serie-a',
                     "loja" => $loja,
                     "tabela" => $tabela
                    );    
    return $view->load('classificacaoEfSerieA', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'classificacao-ef-serie-a', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('classificacaoEfSerieA', $content);  
  }   
}
function jogosEfSerieB($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $dados = new UploadsEfDao();
    $tabela =  $dados->listarTabelaJogosB();
    $tbJogo   =  $dados->listarJogosCompletoB();
    $content = array("navegacao" => 'jogos-ef-serie-b',
                     "loja" => $loja,
                     "tabela" => $tabela,
                     "tbJogo" => $tbJogo
                    );    
    return $view->load('jogosEfSerieB', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'jogos-ef-serie-b', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('jogosEfSerieB', $content);  
  }   
}
function classificacaoEfSerieB($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $dados = new UploadsEfDao();
    $tabela = $dados->listarTabelaJogosB();
    $content = array("navegacao" => 'classificacao-ef-serie-b',
                     "loja" => $loja,
                     "tabela" =>  $tabela
                    );    
    return $view->load('classificacaoEfSerieB', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'classificacao-ef-serie-b', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('classificacaoEfSerieB', $content);  
  } 
}
/********************************************************/

function regrasEf1($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-1',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_1', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-1', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_1', $content);  
  }   
}
function regrasEf2($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-2',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_2', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'login', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_2', $content);  
  }   
}
function regrasEf3($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-3',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_3', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-3', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_3', $content);  
  }   
}
function regrasEf4($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-4',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_4', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-4', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_4', $content);  
  }   
}
function regrasEf5($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-5',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_5', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-5', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_5', $content);  
  }   
}
function regrasEf6($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-6',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_6', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-6', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_6', $content);  
  }   
}
function regrasEf7($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-7',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_7', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-7', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_7', $content);  
  }   
}
function regrasEf8($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-8',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_8', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-8', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_8', $content);  
  }   
}
function regrasEf9($view, $param = null)
{
  try
  {
    
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-9',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_9', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-9', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_9', $content);  
  }   
}
function regrasEf10($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-10',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_10', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-10', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_10', $content);  
  }   
}
function regrasEf11($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-11',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_11', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-11', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_11', $content);  
  }   
}
function regrasEf12($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-12',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_12', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-12', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_12', $content);  
  }   
}
function regrasEf13($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-13',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_13', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-13', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_13', $content);  
  }   
}
function regrasEf14($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef-14',
                     "loja" => $loja
                    );    
    return $view->load('regrasEf_14', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef-14', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasEf_14', $content);  
  }   
}
/***********************************************/

//rota novas faturamento-inicio, e galeria 02-04-2014
function galeria($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'galeria',
                     "loja" => $loja
                    );    
    return $view->load('galeria', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'galeria', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('galeria', $content);  
  } 
}
function faturamentoInicio($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'faturamento-inicio',
                     "loja" => $loja
                    );    
    return $view->load('faturamentoInicio', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'faturamento-inicio', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('faturamentoInicio', $content);  
  } 
}

function campeonatoFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'campeonato-faturamento',
                     "loja" => $loja
                    );    
    return $view->load('campeonato_faturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'campeonato-faturamento', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('campeonato_faturamento', $content);  
  } 
}
function classificacaoFaturamentoSerieA($view, $param = null)
{
  try
  {
    
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'classificacao-faturamento-serie-a',
                     "loja" => $loja
                    );    
    return $view->load('classificacaoFaturamentoSerieA', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'classificacao-faturamento-serie-a', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('classificacaoFaturamentoSerieA', $content);  
  } 
}
function classificacaoFaturamentoSerieB($view, $param = null)
{
  try
  {
    
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $dados = new UploadsEfDao();
    $faturamento = $dados->listarFaturamentoB();
    $content = array("navegacao" => 'classificacao-faturamento-serie-b',
                     "loja" => $loja,
                     "faturamento" => $faturamento
                    );    
    return $view->load('classificacaoFaturamentoSerieB', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'classificacao-faturamento-serie-b', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('classificacaoFaturamentoSerieB', $content);  
  } 
}
/***********************************************************/

function inicio($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    $noticia = $param[0]['dao']->listarNoticiaIndex();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $comentario = $param[0]['dao']->listarMensagensSiteIndex();
    $content = array("navegacao" => 'inicio', 
                     "comentario" => $comentario,
                     "noticia" => $noticia,
                     "loja" => $loja
                    );    
    return $view->load('index', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $comentario = $param[0]['dao']->listarMensagensSiteIndex();
    $content = array("navegacao" => 'inicio',
                     "loja" => $loja,
                     "comentario" => $comentario,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('index', $content);  
  }   
}

//campeonato ef
function campeonatoEf($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'campeonato-ef',
                     "loja" => $loja
                    );    
    return $view->load('campeonatoEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'campeonato-ef', 
                     "loja" => $loja, 
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('campeonatoEf', $content);  
  }   
}
function regrasEf($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-ef', 
                     "loja" => $loja
                    );    
    return $view->load('regrasEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-ef', "loja" => $loja, "mensagem" => $e->getMessage());
    return $view->load('regrasEf', $content);  
  } 
}
function regrasSerieAEf($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-serieA-ef', 
                     "loja" => $loja
                    );    
    return $view->load('regras1SerieAEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-serieA-ef', "loja" => $loja, "mensagem" => $e->getMessage());
    return $view->load('regras1SerieAEf', $content);  
  } 
}
function regras1SerieAEf($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-serieA-ef', 
                     "loja" => $loja
                    );    
    return $view->load('regras2SerieAEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-serieA-ef', "loja" => $loja, "mensagem" => $e->getMessage());
    return $view->load('regras2SerieAEf', $content);  
  } 
}
function regras2SerieAEf($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-serieA-ef', 
                     "loja" => $loja
                    );    
    return $view->load('regras3SerieAEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-serieA-ef', "loja" => $loja, "mensagem" => $e->getMessage());
    return $view->load('regras3SerieAEf', $content);  
  } 
}

function regrasSerieBEf($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-serieB-ef', 
                     "loja" => $loja
                    );    
    return $view->load('regrasSerieBEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-serieB-ef', "loja" => $loja, "mensagem" => $e->getMessage());
    return $view->load('regrasSerieBEf', $content);  
  } 
}


function premiacoesEf($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'premiacoes-ef', "loja" => $loja);    
    return $view->load('premiacoesEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'premiacoes-ef', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('premiacoesEf', $content);  
  }
}

function ganhadoresEf($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $lojas = $param[0]['dao']->listarLojas();
    $ganhadores = $param[0]['dao']->listarGanhadoresEf();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "lojas" => $lojas, 
                     "ganhadores" => $ganhadores,
                     "mensagem" => $mensagem
                    ); 
    return $view->load('ganhadoresEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLojas();
    $ganhadores = $param[0]['dao']->listarGanhadores();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "lojas" => $lojas,
                     "ganhadores" => $ganhadores,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('ganhadoresEf', $content);  
  }
}
function  listarganhadoresEfPorLoja($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $lojas = $param[1]['dao']->listarLojas();
    $ganhadores = $param[1]['dao']->listarGanhadorEfPorLoja($param[0]['loja']);
    $content = array("navegacao" => 'ganhadores-ef', 
                     "lojas" => $lojas,
                     "ganhadores" => $ganhadores, 
                     "mensagem" => $mensagem
                    ); 
    return $view->load('ganhadoresEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLojas();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "lojas" => $lojas,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('ganhadoresEf', $content);  
  }
}
function ganhadoresDestaqueEf($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "loja" => $loja
                    ); 
    return $view->load('ganhadoresDestaqueEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('ganhadoresDestaqueEf', $content);  
  }
}

//rota de teste ganhadores destaque 14-04-2014 > alterado 15-04-2014
function ganhadoresDestaqueEfTeste($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "loja" => $loja
                    ); 
    return $view->load('ganhadoresDestaqueEfTeste', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('ganhadoresDestaqueEfTeste', $content);  
  }
}
function ganhadoresMesSemana($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    #$ganhadores = $param[0]['dao']->listarGanhadoresDestaque();
    $ganhadores = $param[1]['dao']->listarGanhadoresDestaqueMesSemana($param[0]['mes'], $param[0]['semana']);
    if(count($ganhadores)===0)
      $mensagem = false;
    $content = array("navegacao" => 'ganhadores-destaque-mes-semana', 
                     "loja" => $loja, 
                     "ganhadores" => $ganhadores,
                     "mensagem" => $mensagem
                    ); 
    return $view->load('ganhadoresDestaqueEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[1]['dao']->listarLoja();
    $content = array("navegacao" => 'ganhadores-destaque-mes-semana', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('ganhadoresDestaqueEf', $content);  
  }
}
/**************************************************************/

function jogosEf($view, $param = null)
{
  try
  {
    $lojasInscritas  = $param[0]['dao']->listarLojaInscritasEf();
    $loja     =  $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $grupo    = $param[0]['dao']->listarGrupo();
    $subGrupo = $param[0]['dao']->listarSubGrupo();
    $jogo = $param[0]['dao']->listarJogosMarcadosEntreDatas();
    $dados = new UploadsEfDao();
    $tabela =    $dados->listarTabelaJogosA();
    $tbJogo   =  $dados->listarJogosCompletoA();
    $content = array("navegacao" => 'jogos-ef',
                     "loja" => $loja,
                     "grupo" => $grupo,
                     "subGrupo" => $subGrupo,
                     "lojasInscritas" => $lojasInscritas,
                     "jogo" => $jogo,
                     "tabela" => $tabela,
                     "tbJogo" => $tbJogo,
                     "mensagem" => true
                    );    
    return $view->load('jogosEf', $content);
  } 
  catch(Exception $e)
  {
    $lojasInscritas  = $param[0]['dao']->listarLojaInscritasEf();
    $grupo = $param[0]['dao']->listarGrupo();
    $loja  = $param[0]['dao']->listarLoja();
    $jogo = $param[0]['dao']->listarJogosMarcadosEntreDatas();
    $content = array("navegacao" => 'jogos-ef', 
                     "loja" => $loja,
                     "lojasInscritas" => $lojasInscritas,
                     "grupo" => $grupo,
                     "jogo" => $jogo,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('jogosEf', $content);  
  }
}
function todosJogosEf($view, $param = null)
{
  try
  {
    $lojasInscritas  = $param[0]['dao']->listarLojaInscritasEf();
    $loja     =  $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $grupo    = $param[0]['dao']->listarGrupo();
    $subGrupo = $param[0]['dao']->listarSubGrupo();
    $jogo = $param[0]['dao']->listarTodosJogos();
    $content = array("navegacao" => 'jogos-ef',
                     "loja" => $loja,
                     "grupo" => $grupo,
                     "subGrupo" => $subGrupo,
                     "lojasInscritas" => $lojasInscritas,
                     "jogo" => $jogo,
                     "mensagem" => true
                    );    
    return $view->load('jogosEf', $content);
  } 
  catch(Exception $e)
  {
    $lojasInscritas  = $param[0]['dao']->listarLojaInscritasEf();
    $grupo = $param[0]['dao']->listarGrupo();
    $loja  = $param[0]['dao']->listarLoja();
    
    $jogo = $param[0]['dao']->listarTodosJogos();
    $content = array("navegacao" => 'jogos-ef', 
                     "loja" => $loja,
                     "lojasInscritas" => $lojasInscritas,
                     "grupo" => $grupo,
                     "jogo" => $jogo,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('jogosEf', $content);  
  }
}
function listarJogos($view, $param = null)
{
  try
  {
    $mensagem = true;
    $lojasInscritas  = $param[1]['dao']->listarLojaInscritasEf();
    $loja  = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $grupo = $param[1]['dao']->listarGrupo();
    $subGrupo = $param[1]['dao']->listarSubGrupo();
        
      if(!empty($param[0]['loja']))
       $jogos = $param[1]['dao']->listarJogosMarcadosPorLoja($param[0]['loja']);
      elseif(!empty($param[0]['grupo']))  
       $jogos = $param[1]['dao']->listarJogosPorGrupo($param[0]['grupo']);
      elseif(!empty($param[0]['subGrupo']))  
       $jogos = $param[1]['dao']->listarJogosPorSubGrupo($param[0]['subGrupo']);
    
    if(count($jogos)===0)
      $mensagem = false;

    $content = array("navegacao" => 'jogos-ef', 
                     "loja" => $loja, 
                     "lojasInscritas" => $lojasInscritas,
                     "grupo" => $grupo,
                     "subGrupo" => $subGrupo,
                     "jogo" => $jogos,
                     "mensagem" => $mensagem
                    ); 
    return $view->load('jogosEf', $content);
  } 
  catch(Exception $e)
  {
    $lojasInscritas  = $param[1]['dao']->listarLojaInscritasEf();
    $grupo = $param[1]['dao']->listarGrupo();
    $loja  = $param[1]['dao']->listarLoja();
    $subGrupo = $param[1]['dao']->listarSubGrupo();
  
    $content = array("navegacao" => 'jogos-ef', 
                     "loja" => $loja,
                     "lojasInscritas" => $lojasInscritas, 
                     "grupo" => $grupo,
                     "subGrupo" => $subGrupo,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('jogosEf', $content);  
  }
}

function listarPontosJogos($view, $param = null)
{
  try
  {
    $mensagem = true;
    $lojasInscritas  = $param[1]['dao']->listarLojaInscritasEf();
    $loja  = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $grupo = $param[1]['dao']->listarGrupo();
    $jogos = $param[1]['dao']->listarPontosPorJogos($param[0]['id']);
    if(count($jogos)===0)
      $mensagem = false;
    $content = array("navegacao" => 'ganhadores-ef', 
                     "loja" => $loja, 
                     "lojasInscritas" => $lojasInscritas,
                     "grupo" => $grupo,
                     "pontos" => $jogos,
                     "mensagem" => $mensagem
                    ); 
    return $view->load('pontuacaoJogosEf', $content);
  } 
  catch(Exception $e)
  {
    $lojasInscritas  = $param[1]['dao']->listarLojaInscritasEf();
    $grupo = $param[1]['dao']->listarGrupo();
    $loja  = $param[1]['dao']->listarLoja();
    $content = array("navegacao" => 'ganhadores-ef', 
                     "loja" => $loja,
                     "lojasInscritas" => $lojasInscritas, 
                     "grupo" => $grupo,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('pontuacaoJogosEf', $content);  
  }
}
function classificacaoEf($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    /*$grupo = $param[0]['dao']->listarGrupo();
    $inscricao = $param[0]['dao']->listarResultadosJogos();
    if(count($inscricao)===0)
      $mensagem = false;
    */
    $_SESSION['login']->login();
    $dados = new UploadsEfDao();
    $tabela = $dados->listarTabelaJogosA(); 
    $content = array("navegacao" => 'classificacao-ef',
                     "loja" => $loja,
                     "mensagem" => $mensagem,
                     "tabela" => $tabela
                     #"inscricao" => $inscricao,
                     #"grupo" => $grupo,
                    );    
    return $view->load('classificacaoEf', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $grupo  = $grupo = $param[0]['dao']->listarGrupo();
    $content = array("navegacao" => 'classificacao-ef', 
                     "loja" => $loja,
                     "grupo" => $grupo,
                     "mensagem" => $e->getMessage());
    return $view->load('classificacaoEf', $content);  
  } 
}
function classificacaoGrupoEf($view, $param = null)
{
  try 
  {
    $mensagem = true;
    $loja = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $grupo = $param[1]['dao']->listarGrupo();
    $inscricao = $param[1]['dao']->listarResultadosJogosPorGrupo($param[0]['grupo']);
    if(count($inscricao)===0)
      $mensagem = false;

    $content = array("navegacao" => 'listarGrupo-classificacao-ef',
                     "loja" => $loja,
                     "grupo" => $grupo,
                     "inscricao" => $inscricao,
                     "mensagem" => $mensagem
                    );    
    return $view->load('classificacaoEf', $content);
  }
  catch(Exception $e)
  {
    $loja = $param[1]['dao']->listarLoja();
    $grupo = $param[1]['dao']->listarGrupo();
    $content = array("navegacao" => 'listarGrupo-classificacao-ef', 
                     "loja" => $loja,
                     "grupo" => $grupo,
                     "mensagem" => $e->getMessage());
    return $view->load('classificacaoEf', $content);  
  }
}
//rotas de teste cupom 11-04-2014
function cadastroCupomTeste($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $vendedor = $param[0]['dao']->listarCodVendedor();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,
                     "vendedor" => $vendedor 
                    );    
    return $view->load('cadastroCupomTeste', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $vendedor = $param[0]['dao']->listarCodVendedor();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,  
                     "vendedor" => $vendedor,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('cadastroCupomTeste', $content);  
  } 
}
function listarCupomCodVendedorTeste($view, $param = null)
{
  try
  {
    $loja = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $vendedor = $param[1]['dao']->listarCodVendedor();
    $cupom = $param[1]['dao']->listarCuponsLojaVendedor($param[0]['codVendedor']);
    #return var_dump($param[1]['dao']->listarCuponsLojaVendedor($param[0]['codVendedor']));
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,
                     "vendedor" => $vendedor,
                     "cupom" => $cupom 
                    );    
    return $view->load('cadastroCupomTeste', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[1]['dao']->listarLoja();
    $vendedor = $param[1]['dao']->listarCodVendedor();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,  
                     "vendedor" => $vendedor,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('cadastroCupomTeste', $content);  
  } 
}
function listarDetalhesCupomTeste($view, $param = null)
{
  try
  {
    $loja = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $vendedor = $param[1]['dao']->listarCodVendedor();
    $cupom = $param[1]['dao']->listarDetalhesCupons($param[0]['codVendedor']);
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,
                     "vendedor" => $vendedor,
                     "cupom" => $cupom 
                    );    
    return $view->load('detalhesCupomTeste', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[1]['dao']->listarLoja();
    $vendedor = $param[1]['dao']->listarCodVendedor();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,  
                     "vendedor" => $vendedor,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('cadastroCupomTeste', $content);  
  } 
}
/*******************************/

function cadastroCupom($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $vendedor = $param[0]['dao']->listarCodVendedor();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,
                     "vendedor" => $vendedor,
                     "mensagem" =>true 
                    );    
    return $view->load('cadastroCupom', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $vendedor = $param[0]['dao']->listarCodVendedor();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,  
                     "vendedor" => $vendedor,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('cadastroCupom', $content);  
  } 
}
function listarCupomCodVendedor($view, $param = null)
{
  try
  {
    $loja = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $mensagem = true;
    $cupom = $param[1]['dao']->listarCuponsLojaVendedor($param[0]['codVendedor']);
    
    if(count($cupom) === 0)
      $mensagem = false;

    $content = array("navegacao" => 'cadastro-cupom',
                     "cupom" => $cupom,
                     "mensagem" => $mensagem 
                    );    
    return $view->load('cadastroCupom', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[1]['dao']->listarLoja();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,  
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('cadastroCupom', $content);  
  } 
}
function listarDetalhesCupom($view, $param = null)
{
  try
  {
    $loja = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $vendedor = $param[1]['dao']->listarCodVendedor();
    $cupom = $param[1]['dao']->listarDetalhesCupons($param[0]['codVendedor']);
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,
                     "vendedor" => $vendedor,
                     "cupom" => $cupom 
                    );    
    return $view->load('detalhesCupom', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[1]['dao']->listarLoja();
    $vendedor = $param[1]['dao']->listarCodVendedor();
    $content = array("navegacao" => 'cadastro-cupom',
                     "loja" => $loja,  
                     "vendedor" => $vendedor,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('cadastroCupom', $content);  
  } 
}

//campeonato faturamento
function faturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'faturamento', 
                     "loja" => $loja
                    );    
    return $view->load('faturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'faturamento',
                     "loja" => $loja,  
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('faturamento', $content);  
  } 
}
function regrasFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'regras-faturamento',
                     "loja" => $loja  
                    );    
    return $view->load('regrasFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'regras-faturamento',
                     "loja" => $loja, 
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('regrasFaturamento', $content);  
  } 
}
function premiacoesFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'premiacoes-faturamento', 
                     "loja" => $loja
                    );    
    return $view->load('premiacoesFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'premiacoes-faturamento', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('premiacoesFaturamento', $content);  
  } 
}
function premiacaoGerenteFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'premiacao-gerente-regional-faturamento', 
                     "loja" => $loja
                    );    
    return $view->load('premiacaoGerenteRegionalFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'premiacao-gerente-regional-faturamento', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('premiacaoGerenteRegionalFaturamento', $content);  
  } 
}
function premiacaoBimestralVendedoresFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'premiacao-bimestral-vendedores', 
                     "loja" => $loja
                    );    
    return $view->load('premiacaoBimestralVendedoresFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'premiacao-bimestral-vendedores', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('premiacaoBimestralVendedoresFaturamento', $content);  
  } 
}
function premiacaoBimestralGerentesFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'premiacao-bimestral-gerentes', 
                     "loja" => $loja
                    );    
    return $view->load('premiacaoBimestralGerentesFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'premiacao-bimestral-gerentes', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('premiacaoBimestralGerentesFaturamento', $content);  
  } 
}
function premiacaoBimestralGerentesRegionaisFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'premiacao-bimestral-gerentes-regionais-e-gerais', 
                     "loja" => $loja
                    );    
    return $view->load('premiacaoBimestralGerentesRegionaisFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'premiacao-bimestral-gerentes-regionais-e-gerais', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('premiacaoBimestralGerentesRegionaisFaturamento', $content);  
  } 
}

function ganhadoresFaturamento($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'ganhadores-faturamento', 
                     "loja" => $loja
                    );    
    return $view->load('ganhadoresFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'ganhadores-faturamento', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('ganhadoresFaturamento', $content);  
  } 
}


function classificacaoFaturamento($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja  = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login',
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $grupo = $param[0]['dao']->listarGrupo();
    $dados = new UploadsEfDao();
    $faturamento = $dados->listarFaturamentoA();
    if(count($faturamento)===0)
      $mensagem = false;
    $content = array("navegacao" => 'classificacao-faturamento', 
                     "loja" => $loja,
                     "faturamento" => $faturamento,
                     "grupo" => $grupo,
                     "mensagem" => $mensagem
                    );    
    return $view->load('classificacaoFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja  = $param[0]['dao']->listarLoja();
    $grupo = $param[0]['dao']->listarGrupo();
    $content = array("navegacao" => 'classificacao-faturamento', 
                     "loja" => $loja,
                     "grupo" => $grupo,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('classificacaoFaturamento', $content);  
  } 
}

function classificacaoFaturamentoPorGrupo($view, $param = null)
{
  try
  {
    $mensagem = true;
    $loja  = $param[1]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $grupo = $param[1]['dao']->listarGrupo();
    $faturamento = $param[1]['dao']->listarFaturamentoPorGrupo($param[0]['grupo']);
    if(count($faturamento)===0)
      $mensagem = false;
    $content = array("navegacao" => 'classificacao-faturamento', 
                     "loja" => $loja,
                     "faturamento" => $faturamento,
                     "grupo" => $grupo,
                     "mensagem" => $mensagem
                    );    
    return $view->load('classificacaoFaturamento', $content);
  } 
  catch(Exception $e)
  {
    $loja  = $param[0]['dao']->listarLoja();
    $grupo = $param[0]['dao']->listarGrupo();
    $content = array("navegacao" => 'classificacao-faturamento', 
                     "loja" => $loja,
                     "grupo" => $grupo,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('classificacaoFaturamento', $content);  
  } 
}

//resultados
function resultados($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'resultados', 
                     "loja" => $loja
                    );    
    return $view->load('resultados', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'resultados', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('resultados', $content);  
  }
}

//comentarios, inserir, e listar
function cadastroComentarios($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'comentarios');    
    return $view->load('cadastroComentarios', $content);
  } 
  catch(Exception $e)
  {
    $content = array("navegacao" => 'comentarios', "mensagem" => $e->getMessage());
    return $view->load('cadastroComentarios', $content);  
  }
}
function inserir($view, $param = null)
{
  try
  {
    $param[1]['dao']->inserir($param[0]['idFuncionario'], $param[0]['data'], $param[0]['mensagem']);
    $content = array("navegacao" => 'inserir', "mensagem" => true);    
    return $view->load('cadastroComentarios', $content);
  } 
  catch(Exception $e)
  {
    $content = array("navegacao" => 'inserir', "mensagem" => $e->getMessage());
    return $view->load('cadastroComentarios', $content);  
  }
}
function comentariosSite($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $mensagem = true;
    $comentarios = $param[0]['dao']->listarMensagensSite();
    
    if(empty($comentarios))
      $mensagem = false;
    
    $content = array("navegacao" => 'comentariosSite', 
                     "comentarios" => $comentarios,
                     "loja" => $loja,
                     "mensagem" => $mensagem
                    );    
    return $view->load('comentariosSite', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'comentariosSite', "loja" => $loja, "mensagem" => $e->getMessage());
    return $view->load('comentariosSite', $content);  
  }
}
//fim navegação comentários 

//novidades
function novidades($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'novidades', "loja" => $loja);    
    return $view->load('novidades', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'novidades',
                     "loja" => $loja, 
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('novidades', $content);  
  }
}

//faq
function faq($view, $param = null)
{
  try
  {
    $loja = $param[0]['dao']->listarLoja();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja, 
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'faq');    
    return $view->load('faq', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[0]['dao']->listarLoja();
    $content = array("navegacao" => 'faq', 
                     "loja" => $loja,  
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('faq', $content);  
  }
}
function noticia($view, $param = null)
{
  try
  {
    $loja    = $param[1]['dao']->listarLoja();
    $noticiaIntegra = $param[1]['dao']->listarNoticiaId($param[0]['id']);
    $noticia =        $param[1]['dao']->listarNoticia();
    if(verificaLogin()){
      $content = array("navegacao" => 'login', 
                       "loja" => $loja,
                       "mensagem" => "Usuário não autenticado"
                       );
      return $view->load('login', $content); 
    }
    $_SESSION['login']->login();
    $content = array("navegacao" => 'noticia', 
                     "loja" => $loja,
                     "noticia" => $noticia,
                     "noticiaIntegra" => $noticiaIntegra
                    );    
    return $view->load('noticia', $content);
  } 
  catch(Exception $e)
  {
    $loja = $param[1]['dao']->listarLoja();
    $content = array("navegacao" => 'resultados', 
                     "loja" => $loja,
                     "mensagem" => $e->getMessage()
                    );
    return $view->load('noticia', $content);  
  } 
}

/*
function sair($view, $param = null)
{
  try
  {
    if(verificaLogin())
    {
      $comentario = $param[1]['dao']->listarMensagensSiteIndex();
      $content = array("navegacao" => 'login', 
                       "comentario" => $comentario, 
                       "mensagem" => "Usuário não autenticado"
                      );
      return $view->load('index', $content); 
    }
    $_SESSION['login']->logout();
    $_SESSION['login'] = null;
    $comentario = $param[1]['dao']->listarMensagensSiteIndex();
    $content = array("navegacao" => 'inicio',
                     "comentario" => $comentario 
                   );
    return $view->load('index', $content);  
  } 
  catch(Exception $e)
  {
    $comentario = $param[1]['dao']->listarMensagensSiteIndex();
    $content = array("navegacao" => 'login', 
                     "comentario" => $comentario, 
                     "mensagem" => $e->getMessage());
    return $view->load('index', $content); 
  }
}
*/  