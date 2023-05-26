<?php
/* 
    Empleado
    TH -TD = SN
    TH = TH + (TP * 0)
    TI = SB + CM +BN + HES + HE2 + HE3
    TP = IHSS + RAPP + INFOP
    TD = IHSS + RAP + INFOP + PR + SSP + DED
    */

    interface IPayrollNode{
        public function process(float $value): float;
        public function __construct(IPayrollNode $nextNode);
    }

    class SalaryToPay implements IPayrollNode{
        public function __construct(IPayrollNode $nextNode){
            $this->next = $nextNode;
        }
        public function process(float $value):float{
            if($this->next){
                return $this->next->process($value);
            }
            return $value;            
        }
    }

    class CommissionsToPay implements IPayrollNode{
        public function __construct(?IPayrollNode $nextNode){
            $this->next = $nextNode;
        }
        
        public function process(float $value):float{
            //Ir a la DB y ver si hay comisiones
            $newValue = $value * 1.10;
            if($this->next){
                return $this->next->process($value);
            }
            return $newValue;
        }
    }
?>