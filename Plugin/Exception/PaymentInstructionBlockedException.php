<?php

namespace Bundle\JMS\Payment\CorePaymentBundle\Plugin\Exception;

/*
 * Copyright 2010 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * This exception is thrown when a financial transaction cannot be processed
 * against a PaymentInstruction.
 *
 * This is a temporary situation. The financial transaction can be retried
 * against the same PaymentInstruction later on. For example, the credit card
 * associated with a payment instruction might have been put in hold.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class PaymentInstructionBlockedException extends FinancialException
{
}