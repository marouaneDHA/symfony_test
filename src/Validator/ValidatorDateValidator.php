<?php
namespace App\Validator;

use App\Entity\Horaire;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class ValidatorDateValidator extends ConstraintValidator
{
    /**
     * @param Horaire $receipt
     */
    public function validate($receipt, Constraint $constraint): void
    {
        if (!$receipt instanceof Horaire) {
            throw new UnexpectedValueException($receipt, Horaire::class);
        }

        if (!$constraint instanceof ValidatorDate) {
            throw new UnexpectedValueException($constraint, ValidatorDate::class);
        }


       if ($receipt->getDateDebut() > $receipt->getDateFin()) {
            $this->context
                ->buildViolation($constraint->dateDoesNotMatchMessage)
                ->atPath('dateDebut')
                ->addViolation();
       }
    }
}