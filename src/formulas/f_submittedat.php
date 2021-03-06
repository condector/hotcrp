<?php
// formulas/f_submittedat.php -- HotCRP helper class for formula expressions
// Copyright (c) 2009-2020 Eddie Kohler; see LICENSE.

class SubmittedAt_Fexpr extends Fexpr {
    function __construct(FormulaCall $ff) {
        parent::__construct("submittedat");
        $this->_format = $ff->kwdef->is_time ? self::FTIME : self::FDATE;
    }
    function compile(FormulaCompiler $state) {
        return '($prow->submitted_at() ? : null)';
    }
}
