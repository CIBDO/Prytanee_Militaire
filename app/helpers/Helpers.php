<?php

namespace App\helpers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class Helpers
{
    static function formatMontant($montant): string
    {
        return number_format($montant, 0, ',', ' ');
    }

    static function formatDate($date): string
    {
        return date('d/m/Y', strtotime($date));
    }

    static function appreciation($moyenne)
    {
        if ($moyenne < 10) {
            return "Insuffisant";
        } elseif ($moyenne >= 10 && $moyenne < 12) {
            return "Passable";
        } elseif ($moyenne >= 12 && $moyenne < 14) {
            return "Assez bien";
        } elseif ($moyenne >= 14 && $moyenne < 16) {
            return "Bien";
        } elseif ($moyenne >= 16 && $moyenne < 18) {
            return "Très bien";
        } else {
            return "Excellent";
        }
    }

    static function formatDateV2($date)
    {
        $timestamp = strtotime($date);
        return date('H:i j F, Y', $timestamp);
    }

    static function formatTimeAgo($date)
    {
        $timestamp = strtotime($date);
        $currentTime = time();
        $timeDifference = $currentTime - $timestamp;
        $minutesAgo = floor($timeDifference / 60);

        if ($minutesAgo < 60) {
            return $minutesAgo . " min ago";
        } elseif ($minutesAgo < 1440) {
            $hoursAgo = floor($minutesAgo / 60);
            return $hoursAgo . " hours ago";
        } elseif ($minutesAgo < 43200) {
            $daysAgo = floor($minutesAgo / 1440);
            return $daysAgo . " days ago";
        } elseif ($minutesAgo < 525600) {
            $monthsAgo = floor($minutesAgo / 43200);
            return $monthsAgo . " months ago";
        } else {
            $yearsAgo = floor($minutesAgo / 525600);
            return $yearsAgo . " years ago";
        }
    }

    static function isMatchingRoute($prefixes = []): bool
    {
        // Nom de la route actuelle
        $currentRouteName = Request::route()->getName();

        // Vérifiez si le nom de la route commence par l'un des préfixes
        $isMatchingRoute = collect($prefixes)->contains(function ($prefix) use ($currentRouteName) {
            return Str::startsWith($currentRouteName, $prefix);
        });

        if ($isMatchingRoute) {
            // La route actuelle correspond à l'un des préfixes
           return true;
        } else {
            // La route actuelle ne correspond à aucun des préfixes
            return false;
        }
    }


}
