<?php

class TennisGame
{
    public $score = '';

    public function getScore($player1Name, $player2Name, $m_score1, $m_score2)
    {
        $equalScore = $m_score1 == $m_score2;
        $upperOrBy4 = $m_score1 >= 4 || $m_score2 >= 4;

        if ($equalScore) $this->scoreOfAllPlayer($m_score1);
        else if ($upperOrBy4) {
            $minusResult = $m_score1 - $m_score2;
            $this->getPlayerWin($minusResult);
        } else {
            $this->score .= $player1Name . ": ";
            $this->scoreOfMatch($m_score1);
            $this->score .= " - ";
            $this->scoreOfMatch($m_score2);
            $this->score .= " :" . $player2Name;
        }
    }

    public function scoreOfMatch($score)
    {
        switch ($score) {
            case 0:
                $this->score .= "Love";
                break;
            case 1:
                $this->score .= "Fifteen";
                break;
            case 2:
                $this->score .= "Thirty";
                break;
            case 3:
                $this->score .= "Forty";
                break;
        }
    }

    public function scoreOfAllPlayer($score)
    {
        switch ($score) {
            case 0:
                $this->score = "Love-All";
                break;
            case 1:
                $this->score = "Fifteen-All";
                break;
            case 2:
                $this->score = "Thirty-All";
                break;
            case 3:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;
        }
    }

    public function getPlayerWin($minusResult)
    {
        if ($minusResult == 1) $this->score = "Advantage player1";
        else if ($minusResult == -1) $this->score = "Advantage player2";
        else if ($minusResult >= 2) $this->score = "Win for player1";
        else $this->score = "Win for player2";
    }

    public function __toString()
    {
        return $this->score;
    }
}
