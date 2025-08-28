<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
    <head>
    <title>Sitemap</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f9f9f9; padding:20px; }
        h1 { color: #333; }
        table { border-collapse: collapse; width: 100%; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #0073e6; color: #fff; }
        tr:nth-child(even) { background: #f2f2f2; }
    </style>
    </head>
    <body>
    <h1>XML Sitemap</h1>
    <table>
        <tr>
        <th>URL</th>
        <th>Priority</th>
        <th>Change Frequency</th>
        </tr>
        <xsl:for-each select="urlset/url">
        <tr>
            <td><a href="{loc}" target="_blank"><xsl:value-of select="loc"/></a></td>
            <td><xsl:value-of select="priority"/></td>
            <td><xsl:value-of select="changefreq"/></td>
        </tr>
        </xsl:for-each>
    </table>
    </body>
</html>
</xsl:template>

</xsl:stylesheet>
