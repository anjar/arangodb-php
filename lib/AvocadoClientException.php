<?php

/**
 * AvocadoDB PHP client: client exception
 * 
 * @modulegroup AvocadoDbPhpClient
 * @author Jan Steemann
 * @copyright Copyright 2012, triagens GmbH, Cologne, Germany
 */

namespace triagens;

/**
 * AvocadoClientException
 * 
 * This will be thrown by the client when there is an error
 * on the client side, i.e. something the server is not involved in.
 */
class AvocadoClientException extends AvocadoException {
}
