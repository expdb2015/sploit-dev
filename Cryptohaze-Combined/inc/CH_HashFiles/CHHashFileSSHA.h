/*
Cryptohaze Multiforcer & Wordyforcer - low performance GPU password cracking
Copyright (C) 2011  Bitweasil (http://www.cryptohaze.com/)

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/**
 * @section DESCRIPTION
 * 
 * CHHashFileSSHA is an extension of the CHHashFileSalted class for the
 * LDAP {SSHA} hashes.  They are salted SHA1 hashes.
 * 
 * The hashes are to be newline separated and may contain a username at the
 * beginning of the line, colon separated from the hash.
 */

#ifndef _CHHASHFILESSHA_H
#define _CHHASHFILESSHA_H

#include "CH_HashFiles/CHHashFileSalted.h"

class CHHashFileSSHA : public CHHashFileSalted {
protected:

    virtual void parseFileLine(std::string fileLine, size_t lineNumber);

public:

    /**
     * Calls the salted constructor with the 20 byte length.
     */
    CHHashFileSSHA();
};


#endif