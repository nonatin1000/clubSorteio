<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 */
class Cliente extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idclientes';
	
	/**
	 * SQL seleciona os clientes que tem pelomenos um anuncio ativo com vencimento depois do dia 20 de cada mes.
	 * para participar do sorteio 
	 * 
	 */
	function clientesQueIraoParticiparDoSorteio(){
			$sql = '
					SELECT
						c.idclientes, c.nome, a.idanuncios, a.titulo, ap.data_expiracao
					FROM
						clientes c
					INNER JOIN anuncios a on a.clientes_idclientes = c.idclientes
					INNER JOIN anuncios_pagtos ap on ap.anuncios_idanuncios = a.idanuncios
					WHERE a.status = "Ativo" AND ap.data_expiracao >= "2012-09-20"
					GROUP BY c.idclientes ORDER BY ap.data_expiracao DESC
		    ';
	   return $this->query($sql);
	}
}
