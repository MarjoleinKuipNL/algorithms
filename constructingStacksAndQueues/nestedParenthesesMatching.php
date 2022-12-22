<?php
/**
 * 
 */
// pseudo algorithm 
/**
 * valid = true
 * s = empty stack 
 * for(each character of the string) { 
 *  if(character = ( or {  or [ )
 *      s.push(character);
 *  else if character = ) or } or ] ) {
 *      if(s is empty) 
 *          valid = false;
 *  last = s.pop()
 *  if(last is not opening parentheses of character)
 *      valid = false;
 *  if(s is not empty )
 *      valid = false
 * }
 */
    function expressionChecker(string $expression) {
        $valid = TRUE;
        $stack = new SplStack();

        for ($i=0; $i < strlen($expression);  $i++) { 
            # code...
            $char = substr($expression, $i, 1);
            switch ($char) {
                case '(':
                case '{':
                case '[':
                    $stack->push($char);
                break;
                case ')':
                    case '}':
                    case ']':
                        if($stack->isEmpty()) {
                            $valid = FALSE;

                        }else {
                            $last = $stack->pop();
                            if(($char == ")"))
                        }
                    break;
            }
        }
    }
?>